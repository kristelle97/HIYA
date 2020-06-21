@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit your profile</div>

                    <div class="card-body">

                        <img class="mx-auto rounded d-block mb-3" src="{{Auth::user()->picture_url}}"/>

                        <p>These information will be shared with the other Hiya members. Note that we will never share
                            your contact details directly.</p>

                        <vue-form method="POST" action="{{route('profile.update')}}">
                            <input-text name="photo"
                                        type="file"
                                        default-value="{{Auth::user()->photo}}"
                                        label="Photo"
                                        placeholder="Upload a picture of you"></input-text>
                            <input-text name="job_position"
                                        default-value="{{Auth::user()->job_position}}"
                                        label="Job Position"
                                        placeholder="CTO, Lawyer, Employee..."></input-text>
                            <input-work-area name="work_area"
                                             default-value="{{Auth::user()->work_area}}"
                                             placeholder="Industry"
                                             label="Industry"></input-work-area>
                            <input-country name="country_of_residence"
                                           placeholder="Where do you live ?"
                                           default-value="{{Auth::user()->country_of_residence}}"
                                           label="Country of Residence"></input-country>
                            <input-textarea name="description"
                                            default-value="{{Auth::user()->description}}"
                                            placeholder="What you do in life, your life goals, something about your career, or anything you would like to share."
                                            label="Description"
                            ></input-textarea>
                            <div class="row">
                                <div class="col text-center">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>

                        </vue-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
