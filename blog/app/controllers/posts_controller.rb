class PostsController < ApplicationController
before_action :set_user
before_action :set_post, only: [:show, :edit, :update, :destroy]

 def index
  @posts = Post.all
 end

 def new
 end

 def edit
 end

 def create
  @post = Post.new(content: params[:content], user_id: @user.id)
  @post.save
  respond_to do |format|
   format.js
  end
 end

 def update
  @post.update content: params[:content]
 end

 def destroy
  @post.destroy
 end

 private

 def set_user
  @user = User.find_by(id: params[:user_id])
  redirect_to page_not_found unless @user.present?
 end

 def set_post
  @post = Post.find_by(id: params[:id])
  redirect_to page_not_found unless @post.present?
 end
end
