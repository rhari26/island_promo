Rails.application.routes.draw do
  devise_for :users,  skip: [:registrations, :sessions]
  as :user do
   get '/signin', to: 'users/sessions#new', as: :new_user_session
   post 'login', to: 'users/sessions#create', as: :session_create
   get '/signup/user', to: 'users/registrations#new', as: :new_user_registration
   post '/register/user', to: 'users/registrations#create', as: :user_registration
   delete '/bye', to: 'users/sessions#destroy', as: :destroy_user_session
  end
  get '/' => "posts#index", as: :home
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
  get 'post/:user_id' => "posts#index", as: :root
  # root :to => "posts#index"
  get '/post/:user_id/new' => "posts#new", as: :new_post
  get '/post/:user_id/edit/:id' => "posts#edit", as: :edit_post
  get '/post/:user_id/show/:id' => "posts#show", as: :show_post
  post '/post/:user_id/create' => "posts#create", as: :create_post
  post '/post/:user_id/update/:id' => "posts#update", as: :update_post
  delete '/post/:user_id/delete/:id' => "posts#destroy", as: :destroy_post
  post '/post/like/:id' => "posts#like", as: :like_post

  get '/comment/:post_id/new' => "comments#new", as: :new_comment
  get '/comment/:post_id/edit/:id' => "comments#edit", as: :edit_comment
  post '/comment/:post_id/create' => "comments#create", as: :create_comment
  post '/comment/:post_id/update/:id' => "comments#update", as: :update_comment
  delete '/comment/:post_id/delete/:id' => "comments#destroy", as: :destroy_comment
end
