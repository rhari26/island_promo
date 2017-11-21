class Users::SessionsController < Devise::SessionsController
  # before_action :configure_sign_in_params, only: [:create]


  # GET /resource/sign_in
  # def new
  #
  # end

  # POST /resource/sign_in
  def create
   @user = User.find_by(email: params[:user][:email])
   if @user.present?
    if @user.valid_password?(params[:user][:password])
     sign_in(User, @user)
     redirect_to root_path(@user.id)
    else
     flash[:message] = "Invalid details"
     redirect_to new_user_session_path
    end
   end
  end

  # DELETE /resource/sign_out
  # def destroy
  #   super
  # end

  # protected

  # If you have extra params to permit, append them to the sanitizer.
  # def configure_sign_in_params
  #   devise_parameter_sanitizer.permit(:sign_in, keys: [:attribute])
  # end
end
