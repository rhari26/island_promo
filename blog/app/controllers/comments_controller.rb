class CommentsController < ApplicationController
 before_action :set_post, only: [:create]
 before_action :set_comment, only: [:edit, :update, :destroy]
 before_action :authenticate_user!

 def new
 end

 def create
  if params[:text].present?
   @comment = Comment.new(comment: params[:text], post_id: @post.id, user_id: current_user.id)
   @comment.save
  end
 end

 def edit
 end

 def update
  @comment.update comment: params[:text]
 end

 def destroy
 end

 private

 def set_comment
  @comment = Comment.find_by(id: params[:id])
  redirect_to page_not_found unless @comment.present?
 end

 def set_post
  @post = Post.find_by(id: params[:post_id])
  redirect_to page_not_found unless @post.present?
 end
end
