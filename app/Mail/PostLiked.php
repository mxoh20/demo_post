<?php

namespace App\Mail;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostLiked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public $liker;
    /**
     * @var \App\Models\Post
     */
    public $post;

    /**
     * Create a new message instance.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable|null $user
     * @param \App\Models\Post $post
     * @return void
     */
    public function __construct(User $liker,Post $post)
    {
        //
        $this->liker = $liker;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.posts.post_liked')->subject('someone liked your post');
    }
}
