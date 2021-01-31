@extends('layouts.main')

@section('content')
    <div class="w-full bg-gray-100 py-10">
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8">
            <div class="bg-white p-5 rounded shadow-lg w-full relative h-full flex flex-col">
                <h1 class="text-2xl font-semibold">Edit your profile</h1>

                <img class="mx-auto rounded-full block mb-3 w-32" src="{{Auth::user()->picture_url}}"/>

                <p>These information will be shared with the other Hiya members. Note that we will never share
                    your contact details directly.</p>

                <vue-form method="POST" action="{{route('profile.update')}}">
                    <input-text name="photo" class="mt-3"
                                type="file"
                                default-value="{{Auth::user()->photo}}"
                                label="Photo"
                                placeholder="Upload a picture of you"></input-text>
                    <input-text name="job_position" class="mt-3"
                                default-value="{{Auth::user()->job_position}}"
                                label="Job Position"
                                placeholder="CTO, Lawyer, Employee..."></input-text>
                    <input-work-area name="work_area" class="mt-3"
                                     default-value="{{Auth::user()->work_area}}"
                                     placeholder="Industry"
                                     label="Industry"></input-work-area>
                    <input-country name="country_of_residence" class="mt-3"
                                   placeholder="Where do you live ?"
                                   default-value="{{Auth::user()->country_of_residence}}"
                                   label="Country of Residence"></input-country>
                    <input-textarea name="description" class="mt-3"
                                    default-value="{{Auth::user()->description}}"
                                    placeholder="What you do in life, your life goals, something about your career, or anything you would like to share."
                                    label="Description"
                    ></input-textarea>
                    <div class="flex justify-center mt-5">
                            <button class="transition border-2 hover:border-blue-intami border-gray-300 hover:bg-blue-intami rounded px-8 py-2 hover:text-white" type="submit">Save</button>
                    </div>

                </vue-form>
            </div>
        </div>
    </div>
@endsection
