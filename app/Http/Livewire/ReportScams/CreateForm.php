<?php

namespace App\Http\Livewire\ReportScams;

use Livewire\Component;
use App\Models\ScamType;
use App\Models\Platform;
use App\Models\Gender;
use App\Models\Country;
use App\Models\State;
use App\Models\Asset;
use Illuminate\Validation\Rule;


// use Illuminate\Support\Facades\Validator;


class CreateForm extends Component
{
    public $scam = [];
    public $scammer  = [];

    public $reporter = [ ];
    public $platform = [ ];
    public $lost_asset = [ ];

    public $date_of_first_contact;

    public $platforms = [];
    public $scam_types = [];
    public $genders = [];
    public $countries = [];
    public $states = [];

    public $show_scam_info_form = true;
    public $scam_info_form_progress = true;

    public $show_reporter_info_form = false;
    public $reporter_info_form_progress = false;

    public $show_next_button = true;
    public $show_back_button = false;
    public $show_preview = false;
    public $show_submit_button = false;


    public function mount(){
        $this->platforms = Platform::all();
        $this->scam_types = ScamType::orderBy('name','asc')->get();
        $this->genders = Gender::orderBy('name','asc')->get();
        $this->countries = Country::orderBy('name','asc')->get();
        $this->assets = Asset::orderBy('name','asc')->get();
        $this->reporter['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    }
    public function render()
    {
        return view('livewire.report-scams.create-form');
    }
    public function updatedScammerCountryId($value){
        $this->states = State::where('country_id','=',$value)->orderBy('name','asc')->get();
    }
    public function submit(){

        // $this->validateReporterInfo();

    }
    public function validateFormData(){
        if($this->show_scam_info_form )
            $this->validateScamInfo();
        if($this->show_reporter_info_form )
            $this->validateReporterInfo();  
    }
    public function next(){
        $this->validateFormData();
        if($this->show_scam_info_form){
            $this->show_scam_info_form = false;
            $this->show_reporter_info_form = true;

            $this->reporter_info_form_progress = true;

            $this->show_back_button = true;
            $this->show_next_button = true;
        }
        elseif($this->show_reporter_info_form ){
            $this->show_scam_info_form = false;
            $this->show_reporter_info_form = false;
            $this->preview_progress = true;
            $this->show_preview = true;
            $this->show_next_button = false;
        }
        

    }
    public function back(){
        if($this->show_reporter_info_form){
            $this->show_reporter_info_form = false;
            $this->reporter_info_form_progress = false;
            $this->show_back_button = false;
            $this->show_scam_info_form = true;
        }
        if($this->show_preview){
            $this->show_preview = false;
            $this->preview_progress = false;
            $this->show_scam_info_form = true;
        }
        $this->show_scam_info_form = true;
    }

    public function validateScamInfo(){
        $platform_rule = [];
        foreach ($this->platform as $key=>$value) {
            $platform_rule =  array_merge($platform_rule,[
            'platform.'.$key.'.checked' =>'nullable|bool',
            'platform.'.$key.'.link' =>  Rule::requiredIf($this->platform[$key]['checked']),
           ]);
        }

        $validatedData = $this->validate(
            array_merge([
                'scam.type_id' => 'required|integer',
                'scam.is_in_progress' => 'nullable|bool',
                'scammer.name' => 'required|string',
                'scammer.gender_id' => 'required|integer',
                'scammer.phone_number' => 'required|string|min:10|max:18',
                'scammer.email' => 'required|email',
                'scammer.country_id' => 'nullable|integer',
                'scammer.state_id' => 'nullable|string',
                'scammer.address' => 'nullable|string|min:3|max:255',
                'date_of_first_contact'=>'required|date',
            ],$platform_rule),
            [
                'scam.type_id.required' => 'The scam type required',
                'scam.type_id.integer' => 'The scam type is not valid. Select from the option available',
                'scammer.gender_id.required' => 'The scammer gender is required',
                'scammer.gender_id.integer' => 'The scammer gender is not valid. Select from the option available', 
                'scammer.country_id.required' => 'The scammer country is required',
                'scammer.country_id.integer' => 'The scammer country is not valid. Select from the option available',
                'scammer.state_id.required' => 'The scammer state is required',
                'scammer.state_id.integer' => 'The scammer state is not valid. Select from the option available',
            ],
        );
    }

    public function validateReporterInfo() {
        // $this->show_scam_info_form = false;
        // $this->show_reporter_info_form = true;
        // $this->reporter_info_form_progress = true;
    }


}
