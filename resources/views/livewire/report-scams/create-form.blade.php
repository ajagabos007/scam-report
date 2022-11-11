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
                    <div class="timeline-step  {{ $preview_progress? 'active': ''}} ">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                            <div class="inner-circle {{ $preview_progress? 'active': ''}}"></div>
                            <p class="h6 mt-3 mb-1">PREVIEW</p>
                            <small class="text-sm italic text-slate-300 ">Preview and submit </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- report scam form -->
    <div class="container rounded shadow p-4 shadow-blue-400 bg-slate-100">
        
        <form wire:submit.prevent='submit' x-data="{open_scam_info_form: @entangle('show_scam_info_form'), open_reporter_info_form: @entangle('show_reporter_info_form'), open_preview: @entangle('show_preview') }">
            <!-- Scammer Information -->
            <div id="scam_information" x-show="open_scam_info_form">
                     
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200 ">
                     <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">The Scam</h5>
                    </div>
                   
                    <div class="sm:flex gap-2">
                        <div class="mb-2 w-full">
                            <label for="scam_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Scam Status</label>
                            <label for="red-toggle" class="inline-flex  relative items-center mr-5 cursor-pointer">
                                <x-jet-input type="checkbox"  wire:model.lazy='scam.is_in_progress' id="red-toggle" class="sr-only peer"/>
                                <div class="w-11 h-6 border-gray-900 bg-gray-50 rounded-full peer peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Suspected scam in progress</span>
                            </label>
                            <x-jet-input-error for="scam.is_in_progress"></x-jet-input-error>
                        </div>
                        <div class="mb-2 w-full">
                            <label for="scam_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Scam Type</label>
                            <select id="scam_type" wire:model.lazy='scam.type_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scam.type_id')? 'is-invalid ': ''}}">
                                <option value={{null}}>select scam type</option>
                                @foreach($scam_types as $scam_type)
                                <option value="{{$scam_type->id}}">{{$scam_type->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="scam.type_id"></x-jet-input-error>
                        </div>
                    
                    </div>
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
                            <option value={{null}}>select gender</option>
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
                                <option value={{null}}> Select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{__($country->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="scammer.country_id"></x-jet-input-error>
                        </div>
                        <div class="mb-2 w-full">
                            <label for="states" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">State</label>
                            <select id="states" wire:model.lazy='scammer.state_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scammer.state_id')? 'is-invalid ': ''}}">
                                <option value={{null}}>Select state</option>
                                @foreach($scammer_states as $state)
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
                                        <input id="checkbox-2" type="checkbox" wire:model="scam.platform.{{$platform->slug}}.checked" class="w-4 h-4 text-blue-600 bg-gray-300 rounded border-gray-500 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$platform->name}}</label>
                                    </div>
                                    <x-jet-input-error for="scam.platform.{{$platform->slug}}.checked"></x-jet-input-error>
                                    
                                    <div>
                                        <div >
                                            <input type="text" id="scammer_platform_{{$platform->slug}}_link" wire:model.lazy="scam.platform.{{$platform->slug}}.link"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('scam.platform.'.$platform->slug.'.link')? 'is-invalid ': ''}}" placeholder="{{$platform->input_tag_title}}"/>
                                            <x-jet-input-error for="scam.platform.{{$platform->slug}}.link"></x-jet-input-error>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Scam message received</label>
                        <textarea id="message" wire:model.lazy="scam.message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="The message/chat/description of the scam"></textarea>
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
                    <div class="sm:flex gap-2">
                        <div class="mb-6 w-full">
                            <label for="reporter_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Gender</label>
                            <select id="reporter_gender" name="reporter_gender" wire:model.lazy='reporter.gender_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.gender_id')? 'is-invalid ': ''}}">
                                <option value={{null}}>select gender</option>
                                @foreach($genders as $gender)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="reporter.gender_id"></x-jet-input-error>
                        </div>
                        <div class="mb-6 w-full">
                            <label for="reporter_age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Age</label>
                            <input type="month" id="reporter_name" wire:model.lazy='reporter.age' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.age')? 'is-invalid ': ''}}" placeholder="YYYY-MM" />
                            <x-jet-input-error for="reporter.age"></x-jet-input-error>
                        </div>
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
                        <label for="reporter_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">E-mail address</label>
                        <input type="text" id="reporter_email" wire:model.lazy='reporter.email' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.email')? 'is-invalid ': ''}}" placeholder="Email address"/>
                        <x-jet-input-error for="reporter.email"></x-jet-input-error>
                    </div>
                    <div class="sm:flex gap-2">
                        <div class="mb-2 w-full">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Country</label>
                            <select id="countries" wire:model.lazy='reporter.country_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.country_id')? 'is-invalid ': ''}}">
                                <option value={{null}}>Select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{__($country->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="reporter.country_id"></x-jet-input-error>
                        </div>
                        <div class="mb-2 w-full">
                            <label for="states" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">State</label>
                            <select id="states" wire:model.lazy='reporter.state_id' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.state_id')? 'is-invalid ': ''}}">
                                <option value={{null}}>Select state</option>
                                @foreach($reporter_states as $state)
                                    <option value="{{$state->id}}">{{__($state->name)}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="reporter.state_id"></x-jet-input-error>
                        </div>
                        
                    </div>
                    
                    <div class="mb-2">
                        <label for="reporter_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                        <input type="text" id="reporter_address" wire:model.lazy='reporter.address' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.address')? 'is-invalid ': ''}}" placeholder="reporter address"/>
                        <x-jet-input-error for="reporter.address"></x-jet-input-error>
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
                                        <input id="checkbox-2" type="checkbox" wire:model.lazy="reporter.lost_asset.{{$asset->slug}}.checked" class="w-4 h-4 text-blue-600 bg-gray-300 rounded border-gray-500 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$asset->name}}</label>
                                    </div>
                                    <x-jet-input-error for="reporter.lost_asset.{{$asset->slug}}"></x-jet-input-error>
                                    <div >
                                        <div >
                                            <input type="text" id="lost_asset_{{$asset->slug}}_data" wire:model.lazy="reporter.lost_asset.{{$asset->slug}}.data"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('reporter.lost_asset.'.$asset->slug.'.data')? 'is-invalid ': ''}}" placeholder="{{$asset->input_tag_title}}"/>
                                            <x-jet-input-error for="reporter.lost_asset.{{$asset->slug}}.data"></x-jet-input-error>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Reporter means, -->
            </div>
            <div class="preview_information" x-show="open_preview">
                <div class="mb-2 w-full bg-slate-800  text-white ">
                    <h5 class="text-center">SCAM REPORT FORM PREVIEW</h5>
                </div>
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">The Scam details</h5>
                    </div>
                    <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="sm:flex gap-2">
                        <div class="mb-2 w-full">
                            <label  class="text-sm" >Suspected scam in progress: </label>
                            <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">{{($scam['is_in_progress'])?? 'No' == 1 ? 'Yes':'No'}}</span>
                        </div>
                        <div class="mb-2 w-full">
                            <label class="text-sm" >Scam Type: </label>
                            @php 
                                $scam_name = $scam_types->where('id', $scam['type_id'] ?? NULL)->first() ? $scam_types->where('id', $scam['type_id'])->first()->name : ''; 
                            @endphp
                            <span  class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$scam_name}}</span>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Scammer Information</h5>
                    </div>
                    <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                        <div class="row">
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Name: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">{{($scammer['name'])?? "" }}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Gender: </label>
                                @php 
                                    $scammer_gender = $genders->where('id', $scammer['gender_id'] ?? NULL)->first() ? $genders->where('id', $scammer['gender_id'])->first()->name : ''; 
                                @endphp
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$scammer_gender}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Phone Number: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $scammer['phone_number'] ?? ''}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >E-mail: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $scammer['email'] ?? ''}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Country: </label>
                                @php 
                                    $scammer_country = $countries->where('id', $scammer['country_id'] ?? NULL)->first() ? $countries->where('id', $scammer['country_id'])->first()->name : ''; 
                                @endphp
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$scammer_country}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >State: </label>
                                @php 
                                    $scammer_state= $states->where('id', $scammer['state_id'] ?? NULL)->first() ? $states->where('id', $scammer['state_id'])->first()->name : ''; 
                                @endphp
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$scammer_state}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Address: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $scammer['address'] ?? ''}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Date of first contact with victim: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $date_of_first_contact }}</span>
                            </div>
                            <div class="mb-2 w-full col-12">
                                <label class="text-sm" >Platforms </label>
                                <div>
                                @isset($scam['platform'])
                                    @foreach($scam['platform'] as $key=>$value) 
                                        <span class="m-1 p-1 shadow">
                                            <label class="text-sm" >{{$key?? '' }}: </label>
                                            <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $value['link']?? "" }}</span>
                                        </span>
                                    @endforeach
                                @endisset
                                </div>
                            </div>

                            <div class="mb-2 w-full col-12">
                                <label class="text-sm" >Scam Message Received: </label>
                                <p class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400 text-truncate">{{ $scam['message']?? "" }}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                    <div class="mb-2 w-fit">
                        <h5 class="bg-slate-500 text-sm text-white  text-end px-2">Reporter Information</h5>
                    </div>
                    <div class="mb-6 shadow px-2 pb-2 bg-slate-200">
                        <div class="row">
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Name: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">{{($reporter['name'])?? "" }}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Gender: </label>
                                @php 
                                    $reporter_gender = $genders->where('id', $reporter['gender_id'] ?? NULL)->first() ? $genders->where('id', $reporter['gender_id'])->first()->name : ''; 
                                @endphp
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$reporter_gender}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Age: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-300">{{($reporter['age'])?? "" }}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Phone Number: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $reporter['phone_number'] ?? ''}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >E-mail: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $reporter['email'] ?? ''}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Country: </label>
                                @php 
                                    $reporter_country = $countries->where('id', $reporter['country_id'] ?? NULL)->first() ? $countries->where('id', $reporter['country_id'])->first()->name : ''; 
                                @endphp
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$reporter_country}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >State: </label>
                                @php 
                                    $reporter_state= $states->where('id', $reporter['state_id'] ?? NULL)->first() ? $states->where('id', $reporter['state_id'])->first()->name : ''; 
                                @endphp
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{$reporter_state}}</span>
                            </div>
                            <div class="mb-2 w-full col-lg-4 col-md-6">
                                <label class="text-sm" >Address: </label>
                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $reporter['address'] ?? ''}}</span>
                            </div>
                           
                            <div class="mb-2 w-full col-12">
                                <label class="text-sm" >Asset Lost </label>
                                <div>
                                    @isset($reporter['lost_asset'])
                                        @foreach($reporter['lost_asset'] as $key=>$value) 
                                            <span class="m-1 p-1 shadow">
                                                <label class="text-sm" >{{$key?? '' }}: </label>
                                                <span class="ml-1 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $value['data']?? "" }}</span>
                                            </span>
                                        @endforeach
                                    @endisset
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
           
            <div x-data="{open_back_button: @entangle('show_back_button'), open_next_button: @entangle('show_next_button'), open_submit_button: @entangle('show_submit_button')}">
                <button wire:click.prevent="back" x-show="open_back_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     <div wire:loading wire:target="back" class="spinner-border spinner-border-sm" role="status"></div>
                     Back
                </button>
                
                <button  wire:click.prevent="next" x-show="open_next_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <div wire:loading wire:target="next" class="spinner-border spinner-border-sm" role="status"></div>
                    Next
                </button>
                <button type="submit" x-show="open_submit_button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <div wire:loading wire:target="submit" class="spinner-border spinner-border-sm" role="status"></div>
                    Submit
                </button>
            </div>
           
        </form>
    
    </div class="container">
</div>
