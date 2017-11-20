Rails.application.routes.draw do
  devise_for :users
  # get '/' => "posts#index", as: :root
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
  get '/post/:user_id' => "posts#index", as: :root
  get '/post/:user_id/new' => "posts#new", as: :new_post
  get '/post/:user_id/edit/:id' => "posts#edit", as: :edit_post
  post '/post/:user_id/create' => "posts#create", as: :create_post
  post '/post/:user_id/update/:id' => "posts#update", as: :update_post
  delete '/post/:user_id/delete/:id' => "posts#destroy", as: :destroy_post

  get '/comment/:post_id/new' => "comments#new", as: :new_comment
  get '/comment/:post_id/edit/:id' => "comments#edit", as: :edit_comment
  post '/comment/:post_id/create' => "comments#create", as: :create_comment
  post '/comment/:post_id/update/:id' => "comments#update", as: :update_comment
  delete '/comment/:post_id/delete/:id' => "comments#destroy", as: :destroy_comment
end
