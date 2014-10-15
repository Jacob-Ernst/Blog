<?php


class Post extends BaseModel {
    public static $rules = array(
        'title' => 'required|max:255', 
        'content' => 'required',
        'file' => 'image'
    );
    protected $table = 'posts';
    
    public function user()
    {
        return $this->belongsTo('User');
    }
}
