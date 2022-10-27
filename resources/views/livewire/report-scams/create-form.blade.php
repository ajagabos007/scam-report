<div>
    {{-- Be like water. --}}
    <!-- From progress timeline -->
    <div class="container mt-4 ">                      
        <div class="row">
            <div class="col">
                <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                    <div class="timeline-step {{$scam_info_form_progress? 'active': ''}}">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                            <div class="inner-circle {{$scam_info_form_progress? 'active': ''}}"></div>
                            <p class="h6 mt-3 mb-1">SCAM INFO</p>
                            <small class="text-sm italic text-slate-300 ">The scam information </small>
                        </div>
                    </div>
                    <div class="timeline-step {{$reporter_info_form_progress? 'active': ''}}">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                            <div class="inner-circle {{$reporter_info_form_progress? 'active': ''}}"></div>
                            <p class="h6 mt-3 mb-1">REPORTER INFOR</p>
                            <small class="text-sm italic text-slate-300 ">The reporter information </small>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                            <div class="inner-circle "></div>
                            <p class="h6 mt-3 mb-1">PREVIEW</p>
                            <small class="text-sm italic text-slate-300 ">Preview and submit </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- report scam form -->
    <div class="container rounded shadow p-4 shadow-blue-400 bg-slate-400">
        
        <form wire:submit.prevent='submit' x-data="{open_scam_info_form: @entangle('show_scam_info_form'), open_reporter_info_form: @entangle('show_reporter_info_form') }">
            <!-- Scammer Information -->
            <div id="scam_information" x-show="open_scam_info_form">
                     
                <div class="mb-6">
                    <label for="scam_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">The Scam Type</label>
                    <select id="scam_type" wire:model.lazy='scam.type_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select scam type</option>
                        @foreach($scam_types as $scam_type)
                        <option value="{{$scam_type->id}}">{{$scam_type->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="scam.type_id"></x-jet-input-error>

                </div>
                <!-- Scammer bio -->

                <div class="mb-6 shadow px-2 pb-2 bg-slate-200 ">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Scammer's bio</h5>
                    </div>
                    <div class="mb-2">
                        <label for="scammer_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                        <input type="text" id="scammer_name" wire:model.lazy='scammer.name' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.name')? 'is-invalid ': ''}}" placeholder="Fullname" />
                        <x-jet-input-error for="scammer.name"></x-jet-input-error>
                    </div>
                    <div class="mb-6">
                        <label for="scammer_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
                        <select id="scammer_gender" name="scammer_gender" wire:model.lazy='scammer.gender_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.gender_id')? 'is-invalid ': ''}}">
                            <option>select gender</option>
                            @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="scammer.gender_id"></x-jet-input-error>
                    </div>
                </div>

                <!-- Scammer contact -->
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Scammer's contact</h5>
                    </div>
                    <div class="mb-2">
                        <label for="scammer_phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone Number</label>
                        <input type="text" id="scammer_phone_number" wire:model.lazy='scammer.phone_number' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.phone_number')? 'is-invalid ': ''}}" placeholder="Phone Number"/>
                        <x-jet-input-error for="scammer.phone_number"></x-jet-input-error>
                    </div>
                    <div class="mb-2">
                        <label for="scammer_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail address</label>
                        <input type="text" id="scammer_email" wire:model.lazy='scammer.email' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.email')? 'is-invalid ': ''}}" placeholder="Email address"/>
                        <x-jet-input-error for="scammer.email"></x-jet-input-error>
                    </div>
                    <div class="sm:flex gap-2">
                        <div class="mb-2 w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Country</label>
                            <select id="countries" wire:model.lazy='scammer.country_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.country_id')? 'is-invalid ': ''}}">
                                <option>Select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{__($country->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="scammer.country_id"></x-jet-input-error>
                        </div>
                        <div class="mb-2 w-full">
                            <label for="states" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">State</label>
                            <select id="states" wire:model.lazy='scammer.state_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.state_id')? 'is-invalid ': ''}}">
                                <option>Select state</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{__($state->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="scammer.state_id"></x-jet-input-error>
                        </div>
                    </div>
                    
                    <div class="mb-2">
                        <label for="scammer_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                        <input type="text" id="scammer_address" wire:model.lazy='scammer.address' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.address')? 'is-invalid ': ''}}" placeholder="scammer address"/>
                        <x-jet-input-error for="scammer.address"></x-jet-input-error>
                    </div>
                </div>
                <!-- scammer first contact/means and method -->
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200" >
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Scamming first contact/means and method</h5>
                    </div>
                    <div class="mb-2">
                        <label for="date_of_first_contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Date of first contact</label>
                        <input type="date" id="date_of_first_contact" wire:model.lazy='date_of_first_contact' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('date_of_first_contact')? 'is-invalid ': ''}}" placeholder="scammer address"/>
                        <x-jet-input-error for="date_of_first_contact"></x-jet-input-error>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            @foreach($platforms as $platform)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="flex items-center">
                                        <input id="checkbox-2" type="checkbox" wire:model.lazy="checked_platform.{{$platform->slug}}.accepted" class="w-4 h-4 text-blue-600 bg-gray-300 rounded border-gray-500 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$platform->name}}</label>
                                    </div>
                                    <x-jet-input-error for="checked_platform.{{$platform->slug}}.accepted"></x-jet-input-error>
                                    
                                    <div x-data="{ open:  @js($checked_platform[$platform->slug]['accepted']?? false ))}">
                                        <div x-show='open'>
                                            <input type="text" id="scammer_checked_platform_{{$platform->slug}}_link" wire:model.lazy="checked_platform.{{$platform->slug}}.link"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('checked_platform.'.$platform->slug.'.link')? 'is-invalid ': ''}}" placeholder="{{$platform->input_tag_title}}"/>
                                            <x-jet-input-error for="checked_platform.{{$platform->slug}}.link"></x-jet-input-error>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Scam message received</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="The message/chat/description of the scam"></textarea>
                    </div>

                </div>
                <!-- scamme means, -->
            </div>

            <!-- Reporter Information -->

            <div id="reporter_information" x-show="open_reporter_info_form">
                
                <!-- Reporter bio -->

                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Reporter's bio</h5>
                    </div>
                    <div class="mb-2">
                        <label for="scammer_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                        <input type="text" id="reporter_name" wire:model.lazy='reporter.name' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.name')? 'is-invalid ': ''}}" placeholder="Fullname" />
                        <x-jet-input-error for="reporter.name"></x-jet-input-error>
                    </div>
                    <div class="mb-6">
                        <label for="reporter_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
                        <select id="reporter_gender" name="reporter_gender" wire:model.lazy='reporter.gender_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.gender_id')? 'is-invalid ': ''}}">
                            <option>select gender</option>
                            @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="reporter.gender_id"></x-jet-input-error>
                    </div>
                </div>

                <!-- Reporter contact -->
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Reporter's contact</h5>
                    </div>
                    <div class="mb-2">
                        <label for="reporter_phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone Number</label>
                        <input type="text" id="reporter_phone_number" wire:model.lazy='reporter.phone_number' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.phone_number')? 'is-invalid ': ''}}" placeholder="Phone Number"/>
                        <x-jet-input-error for="reporter.phone_number"></x-jet-input-error>
                    </div>
                    <div class="mb-2">
                        <label for="scammer_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail address</label>
                        <input type="text" id="scammer_email" wire:model.lazy='scammer.email' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.email')? 'is-invalid ': ''}}" placeholder="Email address"/>
                        <x-jet-input-error for="scammer.email"></x-jet-input-error>
                    </div>
                    <div class="sm:flex gap-2">
                        <div class="mb-2 w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Country</label>
                            <select id="countries" wire:model.lazy='scammer.country_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.country_id')? 'is-invalid ': ''}}">
                                <option>Select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{__($country->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="scammer.country_id"></x-jet-input-error>
                        </div>
                        <div class="mb-2 w-full">
                            <label for="states" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">State</label>
                            <select id="states" wire:model.lazy='scammer.state_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.state_id')? 'is-invalid ': ''}}">
                                <option>Select state</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{__($state->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="scammer.state_id"></x-jet-input-error>
                        </div>
                    </div>
                    
                    <div class="mb-2">
                        <label for="scammer_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                        <input type="text" id="scammer_address" wire:model.lazy='scammer.address' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.address')? 'is-invalid ': ''}}" placeholder="scammer address"/>
                        <x-jet-input-error for="scammer.address"></x-jet-input-error>
                    </div>
                </div>
                <!-- Reporter first contact/means and method -->
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Asset lost</h5>
                    </div>

                    <div class="mb-2">
                        <div class="row">
                            @foreach($assets as $asset)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="flex items-center">
                                        <input id="checkbox-2" type="checkbox" wire:model.lazy="lost_asset.{{$asset->slug}}" class="w-4 h-4 text-blue-600 bg-gray-300 rounded border-gray-500 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$asset->name}}</label>
                                    </div>
                                    <x-jet-input-error for="lost_asset.{{$asset->slug}}"></x-jet-input-error>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                   

                </div>
                <!-- Reporter means, -->
            </div>
           
            
            <div x-data="{open_back_button: @entangle('show_back_button'), open_next_button: @entangle('show_next_button'), open_submit_button: @entangle('show_submit_button')}">
                <button wire:click="back" x-show="open_back_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</button>
                <button  wire:click="next" x-show="open_next_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
                <button type="submit" x-show="open_submit_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
           
        </form>
    
    </div class="container">
</div>
