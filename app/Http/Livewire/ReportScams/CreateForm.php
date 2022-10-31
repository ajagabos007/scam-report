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
use App\Models\ReportScam;
use Illuminate\Validation\Validator;


// use Illuminate\Support\Facades\Validator;


class CreateForm extends Component
{
    public $scam = [];
    public $scammer  = [];
    public $scammer_states  = [];


    public $reporter = [ ];
    public $platform = [ ];
    public $reporter_states  = [];
    public $lost_asset = [ ];

    public $date_of_first_contact;

    public $platforms = [];
    public $scam_types = [];
    public $genders = [];
    public $countries = [];
    public $country_states = [];

    public $states = [];

    public $show_scam_info_form = true;
    public $scam_info_form_progress = true;

    public $show_reporter_info_form = false;
    public $reporter_info_form_progress = false;

    public $show_next_button = true;
    public $show_back_button = false;
    public $show_preview = true;
    public $show_submit_button = false;

    public $error_message = null;

    public function mount(){
        $this->platforms = Platform::all();
        $this->scam_types = ScamType::orderBy('name','asc')->get();
        $this->genders = Gender::orderBy('name','asc')->get();
        $this->countries = Country::orderBy('name','asc')->get();
        $this->states = State::orderBy('name','asc')->get();
        $this->assets = Asset::orderBy('name','asc')->get();
        $this->reporter['user_agent'] = $_SERVER['HTTP_USER_AGENT']?? null;
        $this->reporter['ip_address'] = $_SERVER['REMOTE_ADDR']?? null;

        // dd($this->scam_types->where('id', null)->first());
    }
    
    public function render()
    { 
        return view('livewire.report-scams.create-form');
    }
    public function updatedScammerCountryId($value){
        $this->scammer_states = State::where('country_id','=',$value)->orderBy('name','asc')->get();
        $this->reporter_states  = State::where('country_id','=',$value)->orderBy('name','asc')->get();
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
        // $this->withValidator(function (Validator $validator) {

        //     $validator->after(function ($validator) {
               
        //         if ($validator->errors()->count()) {
        //             $this->error_message = $this->summarize($validator->errors()->all());
        //         }

        //     });

        // })->validate(
        //     array_merge([
        //         'scam.type_id' => 'required|integer',
        //         'scam.is_in_progress' => 'required|bool',
        //         'scammer.name' => 'required|string',
        //         'scammer.gender_id' => 'required|integer',
        //         'scammer.phone_number' => 'required|string|min:10|max:18',
        //         'scammer.email' => 'required|email',
        //         'scammer.country_id' => 'nullable|integer',
        //         'scammer.state_id' => 'nullable|string',
        //         'scammer.address' => 'nullable|string|min:3|max:255',
        //         'date_of_first_contact'=>'required|date',
        //     ],$platform_rule),
        //     [
        //         'scam.type_id.required' => 'The scam type is required',
        //         'scam.type_id.integer' => 'The scam type is not valid. Select from the option available',
        //         'scammer.gender_id.required' => 'The scammer gender is required',
        //         'scammer.gender_id.integer' => 'The scammer gender is not valid. Select from the option available', 
        //         'scammer.country_id.required' => 'The scammer country is required',
        //         'scammer.country_id.integer' => 'The scammer country is not valid. Select from the option available',
        //         'scammer.state_id.required' => 'The scammer state is required',
        //         'scammer.state_id.integer' => 'The scammer state is not valid. Select from the option available',
        //     ],
        // );

        $validatedData = $this->validate(
            array_merge([
                'scam.type_id' => 'required|integer',
                'scam.is_in_progress' => 'required|bool',
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
                'scam.type_id.required' => 'The scam type is required',
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
        $lost_asset_rule = [];
        foreach ($this->assets as $key=>$value) {
            $lost_asset_rule =  array_merge($lost_asset_rule,[
            'lost_asset.'.$key.'.checked' =>'nullable|bool',
            // 'lost_asset.'.$key.'.data' =>  Rule::requiredIf($this->platform[$key]['checked']),
           ]);
        }
        $validatedData = $this->validate(
            array_merge([
                'reporter.name' => 'required|string',
                'reporter.gender_id' => 'required|integer',
                'reporter.age' => 'required|date',
                'reporter.phone_number' => 'required|string|min:10|max:18',
                'reporter.email' => 'required|email',
                'reporter.country_id' => 'nullable|integer',
                'reporter.state_id' => 'nullable|string',
                'reporter.address' => 'nullable|string|min:3|max:255',
            ],$lost_asset_rule),
            [
                'reporter.gender_id.required' => 'The reporter gender is required',
                'reporter.gender_id.integer' => 'The reporter gender is not valid. Select from the option available', 
                'reporter.country_id.required' => 'The reporter country is required',
                'reporter.country_id.integer' => 'The reporter country is not valid. Select from the option available',
                'reporter.state_id.required' => 'The reporter state is required',
                'reporter.state_id.integer' => 'The reporter state is not valid. Select from the option available',
            ],
        );
    }

     /**
     * Create an error message summary from the validation errors.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return string
     */
    public function summarize($messages)
    {
        if (! count($messages) || ! is_string($messages[0])) {
            return 'The given data was invalid.';
        }

        $message = array_shift($messages);

        if ($additional = count($messages)) {
            $pluralized = $additional === 1 ? 'error' : 'errors';

            $message .= " (and {$additional} more {$pluralized})";
        }

        return $message;
    }


}
