<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventChoiceItem extends Model {

	//
    protected $table = 'event_choice_item';

    /**
     * Get the event record associated with the eventid.
     */

    public function event(){
        return $this->belongsTo('App\Event', 'eventid', 'id');
    }

    /**
     * Get the question record associated with the questionid.
     */

    public function question(){
        return $this->belongsTo('App\EventQuestion', 'questionid', 'id');
    }

}
