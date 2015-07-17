<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventQuestion extends Model {

	//
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'event_question';

    /**
     * Get the event record associated with the eventquestion.
     */

    public function event(){
        return $this->belongsTo('App\Event', 'eventid', 'id');
    }

    public function answer(){
        return $this->belongsTo('App\EventChoiceItem', 'key', 'id');
    }

}
