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
    
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
    
    public function renderBody()
    {
        $purifier = new HTMLPurifier($config);
        $parse = new Parsedown();
        $dirty_html = $parse->text($this->body);
        return $clean_html = $purifier->purify($dirty_html);
    }
    
    public function setTagListAttribute($value)
    {
        $tags = explode(',', $value);
        
        $tagIds = [];
        
        foreach($tags as $tag)
        { 
            $insert = Tag::firstOrCreate([ 'tag' => $tag]); 
            $tagIds[] = $insert->id; 
        }
        $this->tags()->sync($tagIds);
    }
}
