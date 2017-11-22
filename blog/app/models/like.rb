class Like < ApplicationRecord
 belongs_to :user
 belongs_to :post

 def self.like_post(user, post)
  return unless user.present? && post.present?
  data = Like.find_by(user_id: user.id, post_id: post.id)
  if data.present?
   p'nnnn'
   data.destroy
  else
   p'sssss'
   Like.create(user_id: user.id, post_id: post.id)
  end
 end

 def self.check_like(user, post)
  Like.find_by(user_id: user.id, post_id: post.id).present?
 end
end
