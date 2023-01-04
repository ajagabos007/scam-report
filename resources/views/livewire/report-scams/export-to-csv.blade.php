<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-slot name="title">
        {{__('Reported Scams')}}
    </x-slot>
    <x-slot name="page_title">
        {{__('Reported Scams')}}
    </x-slot>
    <x-slot name="breadcrumb_items">
        <li class="breadcrumb-item"><a href="{{route('report-scams.index')}}">Report scams</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{__('Export To CSV')}}</li>
    </x-slot>
    
    <section class="case-study-post-wrapperddd section-padding">
        <div class="container">
            <button type="button" class="p-2 bg-blue-600 text-white hover:bg-blue-800" onclick="tableToCSV()">
                download CSV
            </button>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left bg-blue-900 text-white">
                    <thead>
                        <tr>
                            <td scope="col" class="py-3 px-6 ">Case Index</td>
                            <td scope="col" class="py-3 px-6">Scam Type</td>
                            <td scope="col" class="py-3 px-6 ">Contacted victim on</td>
                            <td scope="col" class="py-3 px-6">scam message received</td>
                            @foreach (App\Models\Platform::all() as $platform)
                            <td scope="col" class="py-3 px-6 ">M. {{$platform->name}}</td>
                            @endforeach

                            <td scope="col" class="py-3 px-6">Reported On</td>
                            <td scope="col" class="py-3 px-6">Scammer (S.) Name</td>
                            <td scope="col" class="py-3 px-6">S. Gender</td>
                            <td scope="col" class="py-3 px-6">S. Phone Number</td>
                            <td scope="col" class="py-3 px-6">S. Email</td>
                            <td scope="col" class="py-3 px-6">S. Country</td>
                            <td scope="col" class="py-3 px-6">S. State</td>
                            <td scope="col" class="py-3 px-6">S. Address</td>

                            @foreach (App\Models\Asset::all() as $asset)
                            <td scope="col" class="py-3 px-6 ">L. {{$asset->name}}</td>
                            @endforeach

                        </tr>
                    </thead>
                    <tbody>
                        @foreach(App\Models\ReportScam::all() as $report_scam)
                            <tr class="odd:bg-slate-500   even:bg-slate-600 border-b border-blue-400 ">
                                <td scope="row" class="py-4 px-6 font-medium  whitespace-nowrap  dark:text-blue-100">{{$report_scam->id}}</td>
                                <td class="py-4 px-6 max-w-fit">{{$report_scam->type->name}}</td>
                                <td class="py-4 px-6 ">{{$report_scam->date_of_first_contact}}</td>
                                <td class="py-4 px-6 text-truncate max-w-lg">{{$report_scam->scam_message}}</td>
                                @foreach (App\Models\Platform::all() as $platform)
                                <td scope="col" class="py-3 px-6 ">@php $platform_used = $report_scam->platforms->where('id', $platform->id)->first();@endphp {{$platform_used ?  $platform_used->pivot->link : "NILL"}}</td>
                                @endforeach
                                <td class="py-4 px-6 ">{{$report_scam->created_at}}</td>
                                <td class="py-4 px-6 ">{{$report_scam->scammer_name}}</td>
                                <td class="py-4 px-6">{{App\Models\Gender::find($report_scam->scammer_gender_id)->name ?? ""}}</td>
                                <td class="py-4 px-6 ">{{$report_scam->scammer_phone_number}}</td>
                                <td class="py-4 px-6 ">{{$report_scam->scammer_email}}</td>
                                <td class="py-4 px-6 ">{{App\Models\Country::find($report_scam->scammer_country_id)->name ?? "" }}</td>
                                <td class="py-4 px-6 ">{{App\Models\State::find($report_scam->scammer_state_id)->name ?? ""}}</td>
                                <td class="py-4 px-6 ">{{$report_scam->scammer_address}}</td>
                                @foreach (App\Models\Asset::all() as $asset)
                                <td scope="col" class="py-3 px-6 ">@php  $asset_lost = $report_scam->assets->where('id', $asset->id)->first(); @endphp {{ $asset_lost ?  $asset_lost->pivot->data : "NILL" }}</td>
                                @endforeach
                            </tr>   
                        @endforeach 
                    </tbody>                  
                </table>
            </div>
        </div>
    </div>
    <script>
        function tableToCSV() {

            // Variable to store the final csv data
            var csv_data = [];

            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {

                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');

                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {

                    // Get the text data of each cell of
                    // a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }

                // Combine each column value with comma
                csv_data.push(csvrow.join(" , "));
            }
            // combine each row data with new line character
            csv_data = csv_data.join('\n');

            /* We will use this function later to download
            the data in a csv file downloadCSVFile(csv_data);
            */
            downloadCSVFile(csv_data);
        }

    function downloadCSVFile(csv_data) {

        // Create CSV file object and feed our
        // csv_data into it
        CSVFile = new Blob([csv_data], { type: "text/csv" });

        // Create to temporary link to initiate
        // download process
        var temp_link = document.createElement('a');

        // Download csv file
        temp_link.download = "GfG.csv";
        var url = window.URL.createObjectURL(CSVFile);
        temp_link.href = url;

        // This link should not be displayed
        temp_link.style.display = "none";
        document.body.appendChild(temp_link);

        // Automatically click the link to trigger download
        temp_link.click();
        document.body.removeChild(temp_link);
    }

    </script>

</div>
