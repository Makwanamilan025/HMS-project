<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<style>
    .group:hover .group-hover\:block {
        display: block;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
    }


    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    @import url(https://fonts.googleapis.com/css?family=Lato:200,300);

#chartdiv {
	width		: 88%;
	height		: 400px;
	font-size	: 11px;
    margin-left: 12%;
    margin-top: 8%;
}

.amcharts-graph-g1 .amcharts-graph-fill {
  /* filter: url(#blur); */
}

.amcharts-graph-g2 .amcharts-graph-fill {filter: url(#blur);
}

.amcharts-cursor-fill {
  filter: url(#shadow);
}
</style>


<body>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <x-side-bar />
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 md:grid-cols-2 mt-5 mx-64 gap-4 mr-10">
            <a href="{{ route('appointment.index') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-solid fa-calendar-check text-red-500 w-5"></i>
                        <h1 class="text-xl text-gray-600">Appointments</h1>
                    </div>

                    <div>
                        <h2 class="font-bold text-3xl mr-4 text-slate-600">{{$appointments}}</h2>
                    </div>
                </div>
            </a>
            <a href="{{ route('user.index') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-solid fa-user text-sky-500 w-5"></i>
                        <h1 class="text-xl text-gray-600">Admins</h1>
                    </div>

                    <div>
                        <h2 class="font-bold text-3xl mr-4 text-slate-600">1</h2>
                    </div>
                </div>
            </a>
            <a href="{{ route('doctor.index') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-solid fa-user-doctor text-indigo-500 w-5"></i>
                        <h1 class="text-xl text-gray-600">Doctors</h1>
                    </div>

                    <div>
                        <h2 class="font-bold text-3xl mr-4 text-slate-600">{{$Doctor}}</h2>
                    </div>
                </div>
            </a>
            <a href="{{ route('department.index') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-solid fa-building text-cyan-200 w-5"></i>
                        <h1 class="text-xl text-gray-600">Departments</h1>
                    </div>

                    <div>
                        <h2 class="font-bold text-3xl mr-4 text-slate-600">{{$Department}}</h2>
                    </div>
                </div>
            </a>
            <a href="{{ route('bloodbank.index') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-solid fa-hand-holding-droplet text-red-600"></i>
                        <h1 class="text-xl text-gray-600">Bloodbanks</h1>
                    </div>

                    <div>
                        <h2 class="font-bold text-3xl mr-4 text-slate-600">{{$bloodbank}}</h2>
                    </div>
                </div>
            </a>
            <a href="{{ route('patient.index') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-solid fa-bed-pulse w-5 "></i>
                        <h1 class="text-xl text-gray-600">Patients</h1>
                    </div>
                    <div>
                        <h2 class="font-bold text-3xl mr-4 text-slate-600">{{$Patient}}</h2>
                    </div>
                </div>
            </a>
            <a href="{{ route('profile.edit') }}">
                <div
                    class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                        <i class="fa-regular fa-user text-yellow-500"></i>
                        <h1 class="text-xl text-gray-600">Profile</h1>
                    </div>
                    <div>
                        {{-- <h2 class="font-bold text-3xl mr-4 text-slate-600">1</h2> --}}
                    </div>
                </div>
            </a>
            <div
                class="bg-white flex items-center justify-between  shadow-sm rounded-lg hover:shadow-lg h-32  hover:font-bold transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300">
                <div class="p-6 text-gray-900 flex justify-start text-center gap-2 items-center">
                    {{-- <i class="fa-solid fa-bed-pulse w-5 "></i> --}}
                    <h1 class="text-xl text-gray-600">-----</h1>
                </div>
                <div>
                    <h2 class="font-bold text-3xl mr-4 text-slate-600">--</h2>
                </div>
            </div>


        </div>
        {{-- ------------------------------------------------------------------------------------------------------------------------ --}}
        {{-- <div>
            {{-- <div>
                <h1 class="text-2xl font-bold  ml-[17%] mt-14">Available Blood Around you</h1>
            </div>
            <div class='max-w-md mx-auto'>
                <div
                    class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden ml-[145%]">
                    <div class="grid place-items-center h-full w-12 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text"
                        id="search" placeholder="Search something.." />
                </div>
            </div>
        </div> --}}
        {{-- <table class="ml-80">

            <tr>
                <th>Name</th>
                <th>BloodGroup</th>
                <th>BagNumber</th>
                <th>Component</th>
            </tr>
            @forelse ($bloodbanks as $bloodbank)
                <tr>
                    <td>{{ $bloodbank->name }}</td>
                    <td>{{ $bloodbank->BloodGroup }}</td>
                    <td>{{ $bloodbank->BagNumber }}</td>
                    <td>{{ $bloodbank->Component }}</td>
                <td>@empty</td>
                </tr>
            @endforelse
        </table> --}}
        {{-- <div class="mr-28 mt-4 mb-11">{{ $bloodbanks->links() }}</div>  --}}
<!-- visit www.amcharts.com to download -->
<section class="py-8 ml-36">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -mx-4 items-stre">
        <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
          <div class="bg-white rounded">
            <div class="flex flex-wrap items-center pt-5 pb-12 px-6">
              <h3 class="w-full md:w-auto mb-4 md:mb-0 text-xl font-bold">Appointment Analysis</h3>
              <div class="ml-auto inline-flex text-xs text-gray-500">
                <span class="mr-2">
                  <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M8 16C12.4183 16 16 12.4183 16 8H8V16Z" fill="#F67A28"></path>
                    <path d="M0 8C0 12.4183 3.58172 16 8 16V0C3.58172 0 0 3.58172 0 8Z" fill="#F67A28"></path>
                  </svg>
                </span>
                <span>Discharge
                </span>
              </div>
              <div class="ml-6 inline-flex text-xs text-gray-500">
                <span class="mr-2">
                  <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M8 16C12.4183 16 16 12.4183 16 8H8V16Z" fill="#E85444"></path>
                    <path d="M0 8C0 12.4183 3.58172 16 8 16V0C3.58172 0 0 3.58172 0 8Z" fill="#E85444"></path>
                  </svg>
                </span>
                <span>Appointment</span>
              </div>
            </div>
            <div class="chart px-2" data-type="columns-thin" data-variant="orange" style="min-height: 315px;">
              <div id="apexchartsykrs05a4l" class="apexcharts-canvas apexchartsykrs05a4l apexcharts-theme-light" style="width: 723px; height: 300px;">
                <svg id="SvgjsSvg1137" width="723" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                  <foreignobject x="0" y="0" width="723" height="300">
                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div>
                  </foreignobject>
                  <g id="SvgjsG1231" class="apexcharts-yaxis" rel="0" transform="translate(33.71875, 0)">
                    <g id="SvgjsG1232" class="apexcharts-yaxis-texts-g">
                      <text id="SvgjsText1234" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1235">2000</tspan>
                        <title>2000</title>
                      </text>
                      <text id="SvgjsText1237" font-family="Helvetica, Arial, sans-serif" x="20" y="89.48700000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1238">1500</tspan>
                        <title>1500</title>
                      </text>
                      <text id="SvgjsText1240" font-family="Helvetica, Arial, sans-serif" x="20" y="147.574" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1241">1000</tspan>
                        <title>1000</title>
                      </text>
                      <text id="SvgjsText1243" font-family="Helvetica, Arial, sans-serif" x="20" y="205.66100000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1244">500</tspan>
                        <title>500</title>
                      </text>
                      <text id="SvgjsText1246" font-family="Helvetica, Arial, sans-serif" x="20" y="263.748" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1247">0</tspan>
                        <title>0</title>
                      </text>
                    </g>
                  </g>
                  <g id="SvgjsG1139" class="apexcharts-inner apexcharts-graphical" transform="translate(63.71875, 30)">
                    <defs id="SvgjsDefs1138"><lineargradient id="SvgjsLinearGradient1142" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1143" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"><stop id="SvgjsStop1144" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"><stop id="SvgjsStop1145" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></lineargradient><clippath id="gridRectMaskykrs05a4l"><rect id="SvgjsRect1147" width="657.28125" height="252.348" x="-6" y="-10" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><clippath id="forecastMaskykrs05a4l"></clippath><clippath id="nonForecastMaskykrs05a4l"></clippath><clippath id="gridRectMarkerMaskykrs05a4l"><rect id="SvgjsRect1148" width="653.28125" height="236.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath></defs><rect id="SvgjsRect1146" width="12" height="232.348" x="413.2455357142857" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1142)" class="apexcharts-xcrosshairs" y2="232.348" filter="none" fill-opacity="0.9" x1="413.2455357142857" x2="413.2455357142857"></rect><line id="SvgjsLine1190" x1="0" y1="233.348" x2="0" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1191" x1="92.75446428571429" y1="233.348" x2="92.75446428571429" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1192" x1="185.50892857142858" y1="233.348" x2="185.50892857142858" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1193" x1="278.2633928571429" y1="233.348" x2="278.2633928571429" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1194" x1="371.01785714285717" y1="233.348" x2="371.01785714285717" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1195" x1="463.77232142857144" y1="233.348" x2="463.77232142857144" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1196" x1="556.5267857142858" y1="233.348" x2="556.5267857142858" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1197" x1="649.2812500000001" y1="233.348" x2="649.2812500000001" y2="239.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1186" class="apexcharts-grid"><g id="SvgjsG1187" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1199" x1="0" y1="58.087" x2="649.28125" y2="58.087" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1200" x1="0" y1="116.174" x2="649.28125" y2="116.174" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1201" x1="0" y1="174.26100000000002" x2="649.28125" y2="174.26100000000002" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1188" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1204" x1="0" y1="232.348" x2="649.28125" y2="232.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1203" x1="0" y1="1" x2="0" y2="232.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1189" class="apexcharts-grid-borders"><line id="SvgjsLine1198" x1="0" y1="0" x2="649.28125" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1202" x1="0" y1="232.348" x2="649.28125" y2="232.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1230" x1="0" y1="233.348" x2="649.28125" y2="233.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g>
                      <g id="SvgjsG1149" class="apexcharts-bar-series apexcharts-plot-series">
                        <g id="SvgjsG1150" class="apexcharts-series" rel="1" seriesname="Uniquexvisitors" data:realindex="0">
                          <path id="SvgjsPath1155" d="M 34.377232142857146 229.34900000000002 L 34.377232142857146 43.274653333333326 C 34.377232142857146 41.774653333333326 35.877232142857146 40.274653333333326 37.377232142857146 40.274653333333326 L 39.377232142857146 40.274653333333326 C 40.877232142857146 40.274653333333326 42.377232142857146 41.774653333333326 42.377232142857146 43.274653333333326 L 42.377232142857146 229.34900000000002 C 42.377232142857146 230.84900000000002 40.877232142857146 232.34900000000002 39.377232142857146 232.34900000000002 L 37.377232142857146 232.34900000000002 C 35.877232142857146 232.34900000000002 34.377232142857146 230.84900000000002 34.377232142857146 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 34.377232142857146 229.34900000000002 L 34.377232142857146 43.274653333333326 C 34.377232142857146 41.774653333333326 35.877232142857146 40.274653333333326 37.377232142857146 40.274653333333326 L 39.377232142857146 40.274653333333326 C 40.877232142857146 40.274653333333326 42.377232142857146 41.774653333333326 42.377232142857146 43.274653333333326 L 42.377232142857146 229.34900000000002 C 42.377232142857146 230.84900000000002 40.877232142857146 232.34900000000002 39.377232142857146 232.34900000000002 L 37.377232142857146 232.34900000000002 C 35.877232142857146 232.34900000000002 34.377232142857146 230.84900000000002 34.377232142857146 229.34900000000002 Z " pathfrom="M 34.377232142857146 232.34900000000002 L 34.377232142857146 232.34900000000002 L 42.377232142857146 232.34900000000002 L 42.377232142857146 232.34900000000002 L 42.377232142857146 232.34900000000002 L 42.377232142857146 232.34900000000002 L 42.377232142857146 232.34900000000002 L 34.377232142857146 232.34900000000002 Z" cy="40.27365333333333" cx="125.13169642857144" j="0" val="99200" barheight="192.07434666666668" barwidth="12"></path>
                          <path id="SvgjsPath1157" d="M 127.13169642857144 229.34900000000002 L 127.13169642857144 102.91064 C 127.13169642857144 101.41064 128.63169642857144 99.91064 130.13169642857144 99.91064 L 132.13169642857144 99.91064 C 133.63169642857144 99.91064 135.13169642857144 101.41064 135.13169642857144 102.91064 L 135.13169642857144 229.34900000000002 C 135.13169642857144 230.84900000000002 133.63169642857144 232.34900000000002 132.13169642857144 232.34900000000002 L 130.13169642857144 232.34900000000002 C 128.63169642857144 232.34900000000002 127.13169642857144 230.84900000000002 127.13169642857144 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 127.13169642857144 229.34900000000002 L 127.13169642857144 102.91064 C 127.13169642857144 101.41064 128.63169642857144 99.91064 130.13169642857144 99.91064 L 132.13169642857144 99.91064 C 133.63169642857144 99.91064 135.13169642857144 101.41064 135.13169642857144 102.91064 L 135.13169642857144 229.34900000000002 C 135.13169642857144 230.84900000000002 133.63169642857144 232.34900000000002 132.13169642857144 232.34900000000002 L 130.13169642857144 232.34900000000002 C 128.63169642857144 232.34900000000002 127.13169642857144 230.84900000000002 127.13169642857144 229.34900000000002 Z " pathfrom="M 127.13169642857144 232.34900000000002 L 127.13169642857144 232.34900000000002 L 135.13169642857144 232.34900000000002 L 135.13169642857144 232.34900000000002 L 135.13169642857144 232.34900000000002 L 135.13169642857144 232.34900000000002 L 135.13169642857144 232.34900000000002 L 127.13169642857144 232.34900000000002 Z" cy="99.90964" cx="217.88616071428572" j="1" val="68400" barheight="132.43836000000002" barwidth="12"></path>
                          <path id="SvgjsPath1159" d="M 219.88616071428572 229.34900000000002 L 219.88616071428572 95.7252781 C 219.88616071428572 94.2252781 221.38616071428572 92.7252781 222.88616071428572 92.7252781 L 224.88616071428572 92.7252781 C 226.38616071428572 92.7252781 227.88616071428572 94.2252781 227.88616071428572 95.7252781 L 227.88616071428572 229.34900000000002 C 227.88616071428572 230.84900000000002 226.38616071428572 232.34900000000002 224.88616071428572 232.34900000000002 L 222.88616071428572 232.34900000000002 C 221.38616071428572 232.34900000000002 219.88616071428572 230.84900000000002 219.88616071428572 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 219.88616071428572 229.34900000000002 L 219.88616071428572 95.7252781 C 219.88616071428572 94.2252781 221.38616071428572 92.7252781 222.88616071428572 92.7252781 L 224.88616071428572 92.7252781 C 226.38616071428572 92.7252781 227.88616071428572 94.2252781 227.88616071428572 95.7252781 L 227.88616071428572 229.34900000000002 C 227.88616071428572 230.84900000000002 226.38616071428572 232.34900000000002 224.88616071428572 232.34900000000002 L 222.88616071428572 232.34900000000002 C 221.38616071428572 232.34900000000002 219.88616071428572 230.84900000000002 219.88616071428572 229.34900000000002 Z " pathfrom="M 219.88616071428572 232.34900000000002 L 219.88616071428572 232.34900000000002 L 227.88616071428572 232.34900000000002 L 227.88616071428572 232.34900000000002 L 227.88616071428572 232.34900000000002 L 227.88616071428572 232.34900000000002 L 227.88616071428572 232.34900000000002 L 219.88616071428572 232.34900000000002 Z" cy="92.72427809999999" cx="310.640625" j="2" val="72111" barheight="139.62372190000002" barwidth="12"></path>
                          <path id="SvgjsPath1161" d="M 312.640625 229.34900000000002 L 312.640625 109.45510866666667 C 312.640625 107.95510866666667 314.140625 106.45510866666667 315.640625 106.45510866666667 L 317.640625 106.45510866666667 C 319.140625 106.45510866666667 320.640625 107.95510866666667 320.640625 109.45510866666667 L 320.640625 229.34900000000002 C 320.640625 230.84900000000002 319.140625 232.34900000000002 317.640625 232.34900000000002 L 315.640625 232.34900000000002 C 314.140625 232.34900000000002 312.640625 230.84900000000002 312.640625 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 312.640625 229.34900000000002 L 312.640625 109.45510866666667 C 312.640625 107.95510866666667 314.140625 106.45510866666667 315.640625 106.45510866666667 L 317.640625 106.45510866666667 C 319.140625 106.45510866666667 320.640625 107.95510866666667 320.640625 109.45510866666667 L 320.640625 229.34900000000002 C 320.640625 230.84900000000002 319.140625 232.34900000000002 317.640625 232.34900000000002 L 315.640625 232.34900000000002 C 314.140625 232.34900000000002 312.640625 230.84900000000002 312.640625 229.34900000000002 Z " pathfrom="M 312.640625 232.34900000000002 L 312.640625 232.34900000000002 L 320.640625 232.34900000000002 L 320.640625 232.34900000000002 L 320.640625 232.34900000000002 L 320.640625 232.34900000000002 L 320.640625 232.34900000000002 L 312.640625 232.34900000000002 Z" cy="106.45410866666667" cx="403.3950892857143" j="3" val="65020" barheight="125.89389133333334" barwidth="12"></path>
                          <path id="SvgjsPath1163" d="M 405.3950892857143 229.34900000000002 L 405.3950892857143 115.30253333333334 C 405.3950892857143 113.80253333333334 406.8950892857143 112.30253333333334 408.3950892857143 112.30253333333334 L 410.3950892857143 112.30253333333334 C 411.8950892857143 112.30253333333334 413.3950892857143 113.80253333333334 413.3950892857143 115.30253333333334 L 413.3950892857143 229.34900000000002 C 413.3950892857143 230.84900000000002 411.8950892857143 232.34900000000002 410.3950892857143 232.34900000000002 L 408.3950892857143 232.34900000000002 C 406.8950892857143 232.34900000000002 405.3950892857143 230.84900000000002 405.3950892857143 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 405.3950892857143 229.34900000000002 L 405.3950892857143 115.30253333333334 C 405.3950892857143 113.80253333333334 406.8950892857143 112.30253333333334 408.3950892857143 112.30253333333334 L 410.3950892857143 112.30253333333334 C 411.8950892857143 112.30253333333334 413.3950892857143 113.80253333333334 413.3950892857143 115.30253333333334 L 413.3950892857143 229.34900000000002 C 413.3950892857143 230.84900000000002 411.8950892857143 232.34900000000002 410.3950892857143 232.34900000000002 L 408.3950892857143 232.34900000000002 C 406.8950892857143 232.34900000000002 405.3950892857143 230.84900000000002 405.3950892857143 229.34900000000002 Z " pathfrom="M 405.3950892857143 232.34900000000002 L 405.3950892857143 232.34900000000002 L 413.3950892857143 232.34900000000002 L 413.3950892857143 232.34900000000002 L 413.3950892857143 232.34900000000002 L 413.3950892857143 232.34900000000002 L 413.3950892857143 232.34900000000002 L 405.3950892857143 232.34900000000002 Z" cy="112.30153333333334" cx="496.14955357142856" j="4" val="62000" barheight="120.04646666666667" barwidth="12"></path>
                          <path id="SvgjsPath1165" d="M 498.14955357142856 229.34900000000002 L 498.14955357142856 97.87643333333335 C 498.14955357142856 96.37643333333335 499.64955357142856 94.87643333333335 501.14955357142856 94.87643333333335 L 503.14955357142856 94.87643333333335 C 504.64955357142856 94.87643333333335 506.14955357142856 96.37643333333335 506.14955357142856 97.87643333333335 L 506.14955357142856 229.34900000000002 C 506.14955357142856 230.84900000000002 504.64955357142856 232.34900000000002 503.14955357142856 232.34900000000002 L 501.14955357142856 232.34900000000002 C 499.64955357142856 232.34900000000002 498.14955357142856 230.84900000000002 498.14955357142856 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 498.14955357142856 229.34900000000002 L 498.14955357142856 97.87643333333335 C 498.14955357142856 96.37643333333335 499.64955357142856 94.87643333333335 501.14955357142856 94.87643333333335 L 503.14955357142856 94.87643333333335 C 504.64955357142856 94.87643333333335 506.14955357142856 96.37643333333335 506.14955357142856 97.87643333333335 L 506.14955357142856 229.34900000000002 C 506.14955357142856 230.84900000000002 504.64955357142856 232.34900000000002 503.14955357142856 232.34900000000002 L 501.14955357142856 232.34900000000002 C 499.64955357142856 232.34900000000002 498.14955357142856 230.84900000000002 498.14955357142856 229.34900000000002 Z " pathfrom="M 498.14955357142856 232.34900000000002 L 498.14955357142856 232.34900000000002 L 506.14955357142856 232.34900000000002 L 506.14955357142856 232.34900000000002 L 506.14955357142856 232.34900000000002 L 506.14955357142856 232.34900000000002 L 506.14955357142856 232.34900000000002 L 498.14955357142856 232.34900000000002 Z" cy="94.87543333333335" cx="588.9040178571429" j="5" val="71000" barheight="137.47256666666667" barwidth="12"></path>
                          <path id="SvgjsPath1167" d="M 590.9040178571429 229.34900000000002 L 590.9040178571429 72.25619386666668 C 590.9040178571429 70.75619386666668 592.4040178571429 69.25619386666668 593.9040178571429 69.25619386666668 L 595.9040178571429 69.25619386666668 C 597.4040178571429 69.25619386666668 598.9040178571429 70.75619386666668 598.9040178571429 72.25619386666668 L 598.9040178571429 229.34900000000002 C 598.9040178571429 230.84900000000002 597.4040178571429 232.34900000000002 595.9040178571429 232.34900000000002 L 593.9040178571429 232.34900000000002 C 592.4040178571429 232.34900000000002 590.9040178571429 230.84900000000002 590.9040178571429 229.34900000000002 Z " fill="rgba(246,122,40,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 590.9040178571429 229.34900000000002 L 590.9040178571429 72.25619386666668 C 590.9040178571429 70.75619386666668 592.4040178571429 69.25619386666668 593.9040178571429 69.25619386666668 L 595.9040178571429 69.25619386666668 C 597.4040178571429 69.25619386666668 598.9040178571429 70.75619386666668 598.9040178571429 72.25619386666668 L 598.9040178571429 229.34900000000002 C 598.9040178571429 230.84900000000002 597.4040178571429 232.34900000000002 595.9040178571429 232.34900000000002 L 593.9040178571429 232.34900000000002 C 592.4040178571429 232.34900000000002 590.9040178571429 230.84900000000002 590.9040178571429 229.34900000000002 Z " pathfrom="M 590.9040178571429 232.34900000000002 L 590.9040178571429 232.34900000000002 L 598.9040178571429 232.34900000000002 L 598.9040178571429 232.34900000000002 L 598.9040178571429 232.34900000000002 L 598.9040178571429 232.34900000000002 L 598.9040178571429 232.34900000000002 L 590.9040178571429 232.34900000000002 Z" cy="69.25519386666667" cx="681.6584821428572" j="6" val="84232" barheight="163.09280613333334" barwidth="12"></path>
                          <g id="SvgjsG1152" class="apexcharts-bar-goals-markers"><g id="SvgjsG1154" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1156" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1158" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1160" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1162" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1164" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1166" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g></g><g id="SvgjsG1153" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                        </g>
                        <g id="SvgjsG1168" class="apexcharts-series" rel="2" seriesname="Totalxvisitors" data:realindex="1">
                          <path id="SvgjsPath1173" d="M 46.377232142857146 229.34900000000002 L 46.377232142857146 18.48893043333333 C 46.377232142857146 16.98893043333333 47.877232142857146 15.488930433333332 49.377232142857146 15.488930433333332 L 51.377232142857146 15.488930433333332 C 52.877232142857146 15.488930433333332 54.377232142857146 16.98893043333333 54.377232142857146 18.48893043333333 L 54.377232142857146 229.34900000000002 C 54.377232142857146 230.84900000000002 52.877232142857146 232.34900000000002 51.377232142857146 232.34900000000002 L 49.377232142857146 232.34900000000002 C 47.877232142857146 232.34900000000002 46.377232142857146 230.84900000000002 46.377232142857146 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 46.377232142857146 229.34900000000002 L 46.377232142857146 18.48893043333333 C 46.377232142857146 16.98893043333333 47.877232142857146 15.488930433333332 49.377232142857146 15.488930433333332 L 51.377232142857146 15.488930433333332 C 52.877232142857146 15.488930433333332 54.377232142857146 16.98893043333333 54.377232142857146 18.48893043333333 L 54.377232142857146 229.34900000000002 C 54.377232142857146 230.84900000000002 52.877232142857146 232.34900000000002 51.377232142857146 232.34900000000002 L 49.377232142857146 232.34900000000002 C 47.877232142857146 232.34900000000002 46.377232142857146 230.84900000000002 46.377232142857146 229.34900000000002 Z " pathfrom="M 46.377232142857146 232.34900000000002 L 46.377232142857146 232.34900000000002 L 54.377232142857146 232.34900000000002 L 54.377232142857146 232.34900000000002 L 54.377232142857146 232.34900000000002 L 54.377232142857146 232.34900000000002 L 54.377232142857146 232.34900000000002 L 46.377232142857146 232.34900000000002 Z" cy="15.487930433333332" cx="137.13169642857144" j="0" val="112001" barheight="216.86006956666668" barwidth="12"></path>
                          <path id="SvgjsPath1175" d="M 139.13169642857144 229.34900000000002 L 139.13169642857144 56.43716753333333 C 139.13169642857144 54.93716753333333 140.63169642857144 53.43716753333333 142.13169642857144 53.43716753333333 L 144.13169642857144 53.43716753333333 C 145.63169642857144 53.43716753333333 147.13169642857144 54.93716753333333 147.13169642857144 56.43716753333333 L 147.13169642857144 229.34900000000002 C 147.13169642857144 230.84900000000002 145.63169642857144 232.34900000000002 144.13169642857144 232.34900000000002 L 142.13169642857144 232.34900000000002 C 140.63169642857144 232.34900000000002 139.13169642857144 230.84900000000002 139.13169642857144 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 139.13169642857144 229.34900000000002 L 139.13169642857144 56.43716753333333 C 139.13169642857144 54.93716753333333 140.63169642857144 53.43716753333333 142.13169642857144 53.43716753333333 L 144.13169642857144 53.43716753333333 C 145.63169642857144 53.43716753333333 147.13169642857144 54.93716753333333 147.13169642857144 56.43716753333333 L 147.13169642857144 229.34900000000002 C 147.13169642857144 230.84900000000002 145.63169642857144 232.34900000000002 144.13169642857144 232.34900000000002 L 142.13169642857144 232.34900000000002 C 140.63169642857144 232.34900000000002 139.13169642857144 230.84900000000002 139.13169642857144 229.34900000000002 Z " pathfrom="M 139.13169642857144 232.34900000000002 L 139.13169642857144 232.34900000000002 L 147.13169642857144 232.34900000000002 L 147.13169642857144 232.34900000000002 L 147.13169642857144 232.34900000000002 L 147.13169642857144 232.34900000000002 L 147.13169642857144 232.34900000000002 L 139.13169642857144 232.34900000000002 Z" cy="53.43616753333333" cx="229.88616071428572" j="1" val="92402" barheight="178.91183246666668" barwidth="12"></path>
                          <path id="SvgjsPath1177" d="M 231.88616071428572 229.34900000000002 L 231.88616071428572 68.36823733333333 C 231.88616071428572 66.86823733333333 233.38616071428572 65.36823733333333 234.88616071428572 65.36823733333333 L 236.88616071428572 65.36823733333333 C 238.38616071428572 65.36823733333333 239.88616071428572 66.86823733333333 239.88616071428572 68.36823733333333 L 239.88616071428572 229.34900000000002 C 239.88616071428572 230.84900000000002 238.38616071428572 232.34900000000002 236.88616071428572 232.34900000000002 L 234.88616071428572 232.34900000000002 C 233.38616071428572 232.34900000000002 231.88616071428572 230.84900000000002 231.88616071428572 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 231.88616071428572 229.34900000000002 L 231.88616071428572 68.36823733333333 C 231.88616071428572 66.86823733333333 233.38616071428572 65.36823733333333 234.88616071428572 65.36823733333333 L 236.88616071428572 65.36823733333333 C 238.38616071428572 65.36823733333333 239.88616071428572 66.86823733333333 239.88616071428572 68.36823733333333 L 239.88616071428572 229.34900000000002 C 239.88616071428572 230.84900000000002 238.38616071428572 232.34900000000002 236.88616071428572 232.34900000000002 L 234.88616071428572 232.34900000000002 C 233.38616071428572 232.34900000000002 231.88616071428572 230.84900000000002 231.88616071428572 229.34900000000002 Z " pathfrom="M 231.88616071428572 232.34900000000002 L 231.88616071428572 232.34900000000002 L 239.88616071428572 232.34900000000002 L 239.88616071428572 232.34900000000002 L 239.88616071428572 232.34900000000002 L 239.88616071428572 232.34900000000002 L 239.88616071428572 232.34900000000002 L 231.88616071428572 232.34900000000002 Z" cy="65.36723733333332" cx="322.640625" j="2" val="86240" barheight="166.9807626666667" barwidth="12"></path>
                          <path id="SvgjsPath1179" d="M 324.640625 229.34900000000002 L 324.640625 47.145183766666655 C 324.640625 45.645183766666655 326.140625 44.145183766666655 327.640625 44.145183766666655 L 329.640625 44.145183766666655 C 331.140625 44.145183766666655 332.640625 45.645183766666655 332.640625 47.145183766666655 L 332.640625 229.34900000000002 C 332.640625 230.84900000000002 331.140625 232.34900000000002 329.640625 232.34900000000002 L 327.640625 232.34900000000002 C 326.140625 232.34900000000002 324.640625 230.84900000000002 324.640625 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 324.640625 229.34900000000002 L 324.640625 47.145183766666655 C 324.640625 45.645183766666655 326.140625 44.145183766666655 327.640625 44.145183766666655 L 329.640625 44.145183766666655 C 331.140625 44.145183766666655 332.640625 45.645183766666655 332.640625 47.145183766666655 L 332.640625 229.34900000000002 C 332.640625 230.84900000000002 331.140625 232.34900000000002 329.640625 232.34900000000002 L 327.640625 232.34900000000002 C 326.140625 232.34900000000002 324.640625 230.84900000000002 324.640625 229.34900000000002 Z " pathfrom="M 324.640625 232.34900000000002 L 324.640625 232.34900000000002 L 332.640625 232.34900000000002 L 332.640625 232.34900000000002 L 332.640625 232.34900000000002 L 332.640625 232.34900000000002 L 332.640625 232.34900000000002 L 324.640625 232.34900000000002 Z" cy="44.14418376666666" cx="415.3950892857143" j="3" val="97201" barheight="188.20381623333336" barwidth="12"></path>
                          <path id="SvgjsPath1181" d="M 417.3950892857143 229.34900000000002 L 417.3950892857143 95.74270420000002 C 417.3950892857143 94.24270420000002 418.8950892857143 92.74270420000002 420.3950892857143 92.74270420000002 L 422.3950892857143 92.74270420000002 C 423.8950892857143 92.74270420000002 425.3950892857143 94.24270420000002 425.3950892857143 95.74270420000002 L 425.3950892857143 229.34900000000002 C 425.3950892857143 230.84900000000002 423.8950892857143 232.34900000000002 422.3950892857143 232.34900000000002 L 420.3950892857143 232.34900000000002 C 418.8950892857143 232.34900000000002 417.3950892857143 230.84900000000002 417.3950892857143 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 417.3950892857143 229.34900000000002 L 417.3950892857143 95.74270420000002 C 417.3950892857143 94.24270420000002 418.8950892857143 92.74270420000002 420.3950892857143 92.74270420000002 L 422.3950892857143 92.74270420000002 C 423.8950892857143 92.74270420000002 425.3950892857143 94.24270420000002 425.3950892857143 95.74270420000002 L 425.3950892857143 229.34900000000002 C 425.3950892857143 230.84900000000002 423.8950892857143 232.34900000000002 422.3950892857143 232.34900000000002 L 420.3950892857143 232.34900000000002 C 418.8950892857143 232.34900000000002 417.3950892857143 230.84900000000002 417.3950892857143 229.34900000000002 Z " pathfrom="M 417.3950892857143 232.34900000000002 L 417.3950892857143 232.34900000000002 L 425.3950892857143 232.34900000000002 L 425.3950892857143 232.34900000000002 L 425.3950892857143 232.34900000000002 L 425.3950892857143 232.34900000000002 L 425.3950892857143 232.34900000000002 L 417.3950892857143 232.34900000000002 Z" cy="92.74170420000002" cx="508.14955357142856" j="4" val="72102" barheight="139.6062958" barwidth="12"></path>
                          <path id="SvgjsPath1183" d="M 510.14955357142856 229.34900000000002 L 510.14955357142856 37.831901433333336 C 510.14955357142856 36.331901433333336 511.64955357142856 34.831901433333336 513.1495535714286 34.831901433333336 L 515.1495535714286 34.831901433333336 C 516.6495535714286 34.831901433333336 518.1495535714286 36.331901433333336 518.1495535714286 37.831901433333336 L 518.1495535714286 229.34900000000002 C 518.1495535714286 230.84900000000002 516.6495535714286 232.34900000000002 515.1495535714286 232.34900000000002 L 513.1495535714286 232.34900000000002 C 511.64955357142856 232.34900000000002 510.14955357142856 230.84900000000002 510.14955357142856 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 510.14955357142856 229.34900000000002 L 510.14955357142856 37.831901433333336 C 510.14955357142856 36.331901433333336 511.64955357142856 34.831901433333336 513.1495535714286 34.831901433333336 L 515.1495535714286 34.831901433333336 C 516.6495535714286 34.831901433333336 518.1495535714286 36.331901433333336 518.1495535714286 37.831901433333336 L 518.1495535714286 229.34900000000002 C 518.1495535714286 230.84900000000002 516.6495535714286 232.34900000000002 515.1495535714286 232.34900000000002 L 513.1495535714286 232.34900000000002 C 511.64955357142856 232.34900000000002 510.14955357142856 230.84900000000002 510.14955357142856 229.34900000000002 Z " pathfrom="M 510.14955357142856 232.34900000000002 L 510.14955357142856 232.34900000000002 L 518.1495535714286 232.34900000000002 L 518.1495535714286 232.34900000000002 L 518.1495535714286 232.34900000000002 L 518.1495535714286 232.34900000000002 L 518.1495535714286 232.34900000000002 L 510.14955357142856 232.34900000000002 Z" cy="34.83090143333334" cx="600.9040178571429" j="5" val="102011" barheight="197.51709856666668" barwidth="12"></path>
                          <path id="SvgjsPath1185" d="M 602.9040178571429 229.34900000000002 L 602.9040178571429 45.18765186666666 C 602.9040178571429 43.68765186666666 604.4040178571429 42.18765186666666 605.9040178571429 42.18765186666666 L 607.9040178571429 42.18765186666666 C 609.4040178571429 42.18765186666666 610.9040178571429 43.68765186666666 610.9040178571429 45.18765186666666 L 610.9040178571429 229.34900000000002 C 610.9040178571429 230.84900000000002 609.4040178571429 232.34900000000002 607.9040178571429 232.34900000000002 L 605.9040178571429 232.34900000000002 C 604.4040178571429 232.34900000000002 602.9040178571429 230.84900000000002 602.9040178571429 229.34900000000002 Z " fill="rgba(232,84,68,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="4" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskykrs05a4l)" pathto="M 602.9040178571429 229.34900000000002 L 602.9040178571429 45.18765186666666 C 602.9040178571429 43.68765186666666 604.4040178571429 42.18765186666666 605.9040178571429 42.18765186666666 L 607.9040178571429 42.18765186666666 C 609.4040178571429 42.18765186666666 610.9040178571429 43.68765186666666 610.9040178571429 45.18765186666666 L 610.9040178571429 229.34900000000002 C 610.9040178571429 230.84900000000002 609.4040178571429 232.34900000000002 607.9040178571429 232.34900000000002 L 605.9040178571429 232.34900000000002 C 604.4040178571429 232.34900000000002 602.9040178571429 230.84900000000002 602.9040178571429 229.34900000000002 Z " pathfrom="M 602.9040178571429 232.34900000000002 L 602.9040178571429 232.34900000000002 L 610.9040178571429 232.34900000000002 L 610.9040178571429 232.34900000000002 L 610.9040178571429 232.34900000000002 L 610.9040178571429 232.34900000000002 L 610.9040178571429 232.34900000000002 L 602.9040178571429 232.34900000000002 Z" cy="42.186651866666665" cx="693.6584821428572" j="6" val="98212" barheight="190.16134813333335" barwidth="12"></path>
                          <g id="SvgjsG1170" class="apexcharts-bar-goals-markers"><g id="SvgjsG1172" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1174" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1176" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1178" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1180" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1182" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g><g id="SvgjsG1184" classname="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskykrs05a4l)"></g></g><g id="SvgjsG1171" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                        </g>
                        <g id="SvgjsG1151" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realindex="0"></g><g id="SvgjsG1169" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realindex="1"></g>
                      </g>
                      <line id="SvgjsLine1205" x1="0" y1="0" x2="649.28125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1206" x1="0" y1="0" x2="649.28125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                      <g id="SvgjsG1207" class="apexcharts-xaxis" transform="translate(0, 0)">
                        <g id="SvgjsG1208" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                          <text id="SvgjsText1210" font-family="Helvetica, Arial, sans-serif" x="46.377232142857146" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1211">Jan</tspan>
                            <title>Jan</title>
                          </text>
                          <text id="SvgjsText1213" font-family="Helvetica, Arial, sans-serif" x="139.13169642857144" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1214">Feb</tspan>
                            <title>Feb</title>
                          </text>
                          <text id="SvgjsText1216" font-family="Helvetica, Arial, sans-serif" x="231.88616071428575" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1217">Mar</tspan>
                            <title>Mar</title>
                          </text>
                          <text id="SvgjsText1219" font-family="Helvetica, Arial, sans-serif" x="324.640625" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1220">Apr</tspan>
                            <title>Apr</title>
                          </text>
                          <text id="SvgjsText1222" font-family="Helvetica, Arial, sans-serif" x="417.3950892857143" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1223">May</tspan>
                            <title>May</title>
                          </text>
                          <text id="SvgjsText1225" font-family="Helvetica, Arial, sans-serif" x="510.1495535714286" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1226">Jun</tspan>
                            <title>Jun</title>
                          </text>
                          <text id="SvgjsText1228" font-family="Helvetica, Arial, sans-serif" x="602.904017857143" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                            <tspan id="SvgjsTspan1229">Jul</tspan>
                            <title>Jul</title>
                          </text>
                        </g>
                      </g>
                      <g id="SvgjsG1248" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1249" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1250" class="apexcharts-point-annotations"></g>
                      </g>
                      </svg>
                      <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 482.964px; top: 87px;">
                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">May</div>
                        <div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;">
                          <span class="apexcharts-tooltip-marker" style="background-color: rgba(232, 84, 68, 0.85);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group">
                              <span class="apexcharts-tooltip-text-y-label">Total Appointment:</span>
                              <span class="apexcharts-tooltip-text-y-value">{{$appointments}}</span>
                            </div>
                            <div class="apexcharts-tooltip-goals-group">
                              <span class="apexcharts-tooltip-text-goals-label"></span>
                              <span class="apexcharts-tooltip-text-goals-value"></span>
                            </div>
                            <div class="apexcharts-tooltip-z-group">
                              <span class="apexcharts-tooltip-text-z-label"></span>
                              <span class="apexcharts-tooltip-text-z-value"></span>
                            </div>
                          </div>
                        </div>
                        <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;">
                          <span class="apexcharts-tooltip-marker" style="background-color: rgba(232, 84, 68, 0.85);"></span>
                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                            <div class="apexcharts-tooltip-y-group">
                              <span class="apexcharts-tooltip-text-y-label">Total visitors:</span>
                              <span class="apexcharts-tooltip-text-y-value">72102</span>
                            </div>
                            <div class="apexcharts-tooltip-goals-group">
                              <span class="apexcharts-tooltip-text-goals-label"></span>
                              <span class="apexcharts-tooltip-text-goals-value"></span>
                            </div>
                            <div class="apexcharts-tooltip-z-group">
                              <span class="apexcharts-tooltip-text-z-label"></span>
                              <span class="apexcharts-tooltip-text-z-value"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                      </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-full lg:w-1/3 px-4">
                <div class="pt-5 pb-16 px-6 bg-white rounded">
                  <h3 class="text-xl font-bold mb-12">blood bank </h3>
                  <div class="chart px-2" data-type="radial-bar-part" style="min-height: 122.417px;">
                    <div id="apexchartsu6u3m519" class="apexcharts-canvas apexchartsu6u3m519 apexcharts-theme-light" style="width: 289px; height: 122.417px;">
                      <svg id="SvgjsSvg1251" width="289" height="122.41666666666667" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, -20)" style="background: transparent;">
                        <foreignobject x="0" y="0" width="289" height="122.41666666666667">
                          <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                        </foreignobject>
                        <g id="SvgjsG1253" class="apexcharts-inner apexcharts-graphical" transform="translate(24.08333333333333, 1)">
                          <defs id="SvgjsDefs1252"><clippath id="gridRectMasku6u3m519"><rect id="SvgjsRect1254" width="246.83333333333334" height="250.83333333333334" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath><clippath id="forecastMasku6u3m519"></clippath><clippath id="nonForecastMasku6u3m519"></clippath><clippath id="gridRectMarkerMasku6u3m519"><rect id="SvgjsRect1255" width="244.83333333333334" height="242.83333333333334" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clippath></defs>
                          <g id="SvgjsG1256" class="apexcharts-radialbar">
                            <g id="SvgjsG1257">
                              <g id="SvgjsG1258" class="apexcharts-tracks">
                                <g id="SvgjsG1259" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                  <path id="apexcharts-radialbarTrack-0" d="M 31.994918699186996 119.41666666666666 A 88.42174796747967 88.42174796747967 0 0 1 208.83841463414635 119.41666666666667 " fill="none" fill-opacity="1" stroke="rgba(235,234,252,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="14.92656504065041" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathorig="M 31.994918699186996 119.41666666666666 A 88.42174796747967 88.42174796747967 0 0 1 208.83841463414635 119.41666666666667 "></path>
                                </g>
                              </g>
                              <g id="SvgjsG1261">
                                <g id="SvgjsG1264" class="apexcharts-series apexcharts-radial-series" seriesname="series-1" rel="1" data:realindex="0">
                                  <path id="SvgjsPath1265" d="M 31.994918699186996 119.41666666666666 A 88.42174796747967 88.42174796747967 0 0 1 55.749093987013055 59.11317955898596 " fill="none" fill-opacity="0.85" stroke="rgba(56,44,221,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="15.388211382113823" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="43" data:value="24" index="0" j="0" data:pathorig="M 31.994918699186996 119.41666666666666 A 88.42174796747967 88.42174796747967 0 0 1 55.749093987013055 59.11317955898596 "></path>
                                </g>
                                <circle id="SvgjsCircle1262" r="65.95846544715447" cx="120.41666666666667" cy="119.41666666666667" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1263" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g>
                              </g>
                            </g>
                          </g>
                          <line id="SvgjsLine1266" x1="0" y1="0" x2="240.83333333333334" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1267" x1="0" y1="0" x2="240.83333333333334" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                        </g>
                      </svg>
                    </div>
                  </div>
                  <div class="flex items-center justify-center bg-gray-50 rounded-full h-12 w-12 mx-auto -mt-16 mb-8 text-xl">😊</div>
                  <div class="text-center">
                    <h4 class="mb-2 text-4xl font-bold text-indigo-500">18%</h4>
                    <div class="text-center">
                      <span class="mr-2 text-sm font-medium text-gray-500">Social Media Rate</span>
                      <span class="py-1 px-2 bg-green-50 rounded-full text-xs text-green-500">Good</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </section>


{{-- <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<div id="chartdiv"></div> --}}
						<script>
                            var chartData = [{
   "year": 2000,
       "cars": 1691,
       "motorcycles": 737

}, {
   "year": 2001,
       "cars": 1098,
       "motorcycles": 680,
       "bicycles": 910
}, {
   "year": 2002,
       "cars": 975,
       "motorcycles": 664,
       "bicycles": 670
}, {
   "year": 2003,
       "cars": 1246,
       "motorcycles": 648,
       "bicycles": 930
}, {
   "year": 2004,
       "cars": 1218,
       "motorcycles": 637,
       "bicycles": 1010
}, {
   "year": 2005,
       "cars": 1913,
       "motorcycles": 133,
       "bicycles": 1770
}, {
   "year": 2006,
       "cars": 1299,
       "motorcycles": 621,
       "bicycles": 820
}, {
   "year": 2007,
       "cars": 1110,
       "motorcycles": 10,
       "bicycles": 1050
}, {
   "year": 2008,
       "cars": 765,
       "motorcycles": 232,
       "bicycles": 650
}, {
   "year": 2009,
       "cars": 1145,
       "motorcycles": 219,
       "bicycles": 780
}, {
   "year": 2010,
       "cars": 1163,
       "motorcycles": 201,
       "bicycles": 700
}, {
   "year": 2011,
       "cars": 1780,
       "motorcycles": 85,
       "bicycles": 1470
}, {
   "year": 2012,
       "cars": 1580,
       "motorcycles": 285
}];

var chart =  AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "fontFamily": "Lato",
    "autoMargins": true,
    "addClassNames": true,
    "zoomOutText": "",
    "defs": {
        "filter": [
            {
                "x": "-50%",
                "y": "-50%",
                "width": "200%",
                "height": "200%",
                "id": "blur",
                "feGaussianBlur": {
                    "in": "SourceGraphic",
                    "stdDeviation": "50"
                }
            },
            {
                "id": "shadow",
                "width": "150%",
                "height": "150%",
                "feOffset": {
                    "result": "offOut",
                    "in": "SourceAlpha",
                    "dx": "2",
                    "dy": "2"
                },
                "feGaussianBlur": {
                    "result": "blurOut",
                    "in": "offOut",
                    "stdDeviation": "10"
                },
                "feColorMatrix": {
                    "result": "blurOut",
                    "type": "matrix",
                    "values": "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                },
                "feBlend": {
                    "in": "SourceGraphic",
                    "in2": "blurOut",
                    "mode": "normal"
                }
            }
        ]
    },
    "fontSize": 15,
    "dataProvider": chartData,
    "dataDateFormat": "YYYY",
    "marginTop": 0,
    "marginRight": 1,
    "marginLeft": 0,
    "autoMarginOffset": 5,
    "categoryField": "year",
    "categoryAxis": {
        "gridAlpha": 0.07,
        "axisColor": "#DADADA",
        "startOnAxis": true,
        "tickLength": 0,
        "parseDates": true,
        "minPeriod": "YYYY"
    },
    "valueAxes": [
        {
            "ignoreAxisWidth":true,
            "stackType": "regular",
            "gridAlpha": 0.07,
            "axisAlpha": 0,
            "inside": true
        }
    ],
    "graphs": [
        {
            "id": "g1",
            "type": "line",
            "title": "Cars",
            "valueField": "cars",
            "fillColors": [
                "#0066e3",
                "#802ea9"
            ],
            "lineAlpha": 0,
            "fillAlphas": 0.8,
            "showBalloon": false
        },
        {
            "id": "g2",
            "type": "line",
            "title": "Motorcycles",
            "valueField": "motorcycles",
            "lineAlpha": 0,
            "fillAlphas": 0.8,
            "lineColor": "#5bb5ea",
            "showBalloon": false
        },
        {
            "id": "g3",
            "title": "Bicycles",
            "valueField": "bicycles",
            "lineAlpha": 0.5,
            "lineColor": "#FFFFFF",
            "bullet": "round",
            "dashLength": 2,
            "bulletBorderAlpha": 1,
            "bulletAlpha": 1,
            "bulletSize": 15,
            "stackable": false,
            "bulletColor": "#5d7ad9",
            "bulletBorderColor": "#FFFFFF",
            "bulletBorderThickness": 3,
            "balloonText": "<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#ffffff'>[[value]]</div>"
        }
    ],
    "chartCursor": {
        "cursorAlpha": 1,
        "zoomable": false,
        "cursorColor": "#FFFFFF",
        "categoryBalloonColor": "#8d83c8",
        "fullWidth": true,
        "categoryBalloonDateFormat": "YYYY",
        "balloonPointerOrientation": "vertical"
    },
    "balloon": {
        "borderAlpha": 0,
        "fillAlpha": 0,
        "shadowAlpha": 0,
        "offsetX": 40,
        "offsetY": -50
    }
});

// we zoom chart in order to have better blur (form side to side)
chart.addListener("dataUpdated", zoomChart);

function zoomChart(){
    chart.zoomToIndexes(1, chartData.length - 2);
}
                        </script>
    </x-app-layout>

</body>

</html>
