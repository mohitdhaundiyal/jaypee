@extends('layouts.layout')

@section('content')
<div class="container my-2">
    <div class="row">
        <h4 class="display-6">Add Details</h4>
        <hr>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div>
            <form action="/faculty/add-details" method="post">
                @csrf
                <div class="card mb-3">
                    <h5 class="card-header">Basic Details</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="Name" name="name" value="{{Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="Email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email_address') is-invalid @enderror" id="Email" name="email_address" value="{{Auth::user()->email}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="Code" class="form-label">JIIT Employee Code</label>
                                <input type="text" class="form-control @error('jiit_employee_code') is-invalid @enderror" id="Code" name="jiit_employee_code" value="{{old('jiit_employee_code')}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control @error('date_birth') is-invalid @enderror" id="DOB" name="date_birth" value="{{old('date_birth')}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="Category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="Category" name="category" value="{{old('category')}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="Employment" class="form-label">Nature of Employment</label>
                                <input type="text" class="form-control" id="Employment" name="nature_of_employment" value="{{old('nature_of_employment')}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="Department" class="form-label">Department</label>
                                <input type="text" class="form-control" id="Department" name="department" value="{{old('department')}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="JoiningDate" class="form-label">Date of Joining JIIT
                                    Noida</label>
                                <input type="date" class="form-control" id="JoiningDate" name="date_joining_jiit_noida" value="{{old('date_joining_jiit_noida')}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="DesignationOnJoining" class="form-label">Designation on Joining
                                    JIIT
                                    Noida</label>
                                <input type="text" class="form-control" id="DesignationOnJoining"
                                    name="designation_on_joining_jiit_noida" value="{{old('designation_on_joining_jiit_noida')}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="PromotionDate" class="form-label">Date of Last Promotion</label>
                                <input type="date" class="form-control" id="PromotionDate"
                                    name="date_of_last_promotion" value="{{old('date_of_last_promotion')}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="DesignationOnPromotion" class="form-label">Designation on
                                    Promotion</label>
                                <input type="text" class="form-control" id="DesignationOnPromotion"
                                    name="designation_on_promotion" value="{{old('designation_on_promotion')}}">
                            </div>
                        </div>

                        <div class="mb-3 col-md">
                            <label for="Graduation" class="form-label">Graduation
                                (B.TECH / BBA / B.Sc / B.A. / B.Com. / Any Other (please specify))</label>
                            <input type="text" class="form-control" id="Graduation" name="graduation" value="{{old('graduation')}}">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="GraduationYear" class="form-label">Year of Completing
                                    Graduation</label>
                                <input type="number" class="form-control" id="GraduationYear"
                                    name="year_of_completing_graduation" value="{{old('year_of_completing_graduation')}}">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="GraduationInstitute" class="form-label">Institute Name and Place
                                    (Graduation)</label>
                                <input type="text" class="form-control" id="GraduationInstitute"
                                    name="institute_name_and_place_graduation" value="{{old('institute_name_and_place_graduation')}}">
                            </div>
                        </div>

                        <div class="mb-3 col-md">
                            <label for="PostGraduation" class="form-label">Post Graduation (M.Tech / M.S
                                / M.Sc / MBA / MA / M.Com / Any Other (please specify))</label>
                            <input type="text" class="form-control" id="PostGraduation" name="post_graduation" value="{{old('post_graduation')}}">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="PostGraduationYear" class="form-label">Year of Completing
                                    Masters
                                    Program</label>
                                <input type="number" class="form-control" id="PostGraduationYear"
                                    name="year_of_completing_masters_program" value="{{old('year_of_completing_masters_program')}}">
                            </div>
                            <div class="mb-3">
                                <label for="PostGraduationInstitute" class="form-label">Institute Name and
                                    Place
                                    (Post
                                    Graduation)</label>
                                <input type="text" class="form-control" id="PostGraduationInstitute"
                                    name="institute_name_and_place_post_graduation" value="{{old('institute_name_and_place_post_graduation')}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <h5 class="card-header">Higher Education</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Completed PhD</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="CompletedPhdYes" value="yes"
                                    name="completed_phd">
                                <label class="form-check-label" for="CompletedPhdYes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="CompletedPhdNo" value="no"
                                    name="completed_phd">
                                <label class="form-check-label" for="CompletedPhdNo">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="PhdCompletionYear" class="form-label">Year of Completion
                                    (PhD)</label>
                                <input type="number" class="form-control" id="PhdCompletionYear"
                                    name="year_of_completion_phd">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="PhdAwardYear" class="form-label">Year of Award (Doctoral
                                    Degree)</label>
                                <input type="number" class="form-control" id="PhdAwardYear"
                                    name="year_of_award_doctoral_degree">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="PhdInstitute" class="form-label">Institute Name and Place
                                (PhD)</label>
                            <input type="text" class="form-control" id="PhdInstitute"
                                name="institute_name_and_place_phd">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="ExperienceBeforeJoining" class="form-label">Total Experience (in
                                    months)
                                    before Joining JIIT Noida</label>
                                <input type="number" class="form-control" id="ExperienceBeforeJoining"
                                    name="total_experience_months_before_joining_jiit_noida">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AcademicExperience" class="form-label">Total Academic Institute
                                    Experience
                                    (in months)</label>
                                <input type="number" class="form-control" id="AcademicExperience"
                                    name="total_academic_institute_experience_months">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="LastAcademicInstitute" class="form-label">Last Academic Institute
                                Served</label>
                            <input type="text" class="form-control" id="LastAcademicInstitute"
                                name="last_academic_institute_served">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="LastAcademicInstituteServiceDuration" class="form-label">Service
                                    Duration at
                                    Last Served Academic Institute (in months)</label>
                                <input type="number" class="form-control" id="LastAcademicInstituteServiceDuration"
                                    name="service_duration_last_served_academic_institute_months">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="ResearchExperience" class="form-label">Total Experience in
                                    Research
                                    Institutes (in months)</label>
                                <input type="number" class="form-control" id="ResearchExperience"
                                    name="total_experience_research_institutes_months">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="LastResearchInstitute" class="form-label">Last Research Institute
                                Served</label>
                            <input type="text" class="form-control" id="LastResearchInstitute"
                                name="last_research_institute_served">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="LastResearchInstituteServiceDuration" class="form-label">Service
                                    Duration at
                                    Last Served Research Institute (in months)</label>
                                <input type="number" class="form-control" id="LastResearchInstituteServiceDuration"
                                    name="service_duration_last_served_research_institute_months">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="IndustrialExperience" class="form-label">Total Experience in
                                    Industries
                                    (in
                                    months)</label>
                                <input type="number" class="form-control" id="IndustrialExperience"
                                    name="total_experience_industries_months">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="LastOrganization" class="form-label">Last Organization</label>
                            <input type="text" class="form-control" id="LastOrganization" name="last_organization">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="LastOrganizationServiceDuration" class="form-label">Service
                                    Duration at
                                    Last
                                    Organization (in months)</label>
                                <input type="number" class="form-control" id="LastOrganizationServiceDuration"
                                    name="service_duration_last_organization_months">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="OtherExperience" class="form-label">Total Experience in Other
                                    Organizations
                                    (in months)</label>
                                <input type="number" class="form-control" id="OtherExperience"
                                    name="total_experience_other_organizations_months">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Awards -->
                <div class="card mb-3">
                    <h5 class="card-header">Awards</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="NationalAwards" class="form-label">Total National Awards</label>
                                <input type="number" class="form-control" id="NationalAwards"
                                    name="total_national_awards">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="InternationalAwards" class="form-label">Total International
                                    Awards</label>
                                <input type="number" class="form-control" id="InternationalAwards"
                                    name="total_international_awards">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardName1" class="form-label">Award Name 1</label>
                                <input type="text" class="form-control" id="AwardName1" name="award_name_1">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardedBy1" class="form-label">Awarded By 1</label>
                                <input type="text" class="form-control" id="AwardedBy1" name="awarded_by_1">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardDate1" class="form-label">Date of Receiving Award 1</label>
                                <input type="date" class="form-control" id="AwardDate1"
                                    name="date_of_receiving_award_1">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardType1" class="form-label">National or International Award
                                    1</label>
                                <input type="text" class="form-control" id="AwardType1"
                                    name="national_or_international_award_1">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="AwardDocument1" class="form-label">Award Document 1</label>
                            <input type="file" class="form-control" id="AwardDocument1" name="award_document_1">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardName2" class="form-label">Award Name 2</label>
                                <input type="text" class="form-control" id="AwardName2" name="award_name_2">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardedBy2" class="form-label">Awarded By 2</label>
                                <input type="text" class="form-control" id="AwardedBy2" name="awarded_by_2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardDate2" class="form-label">Date of Receiving Award 2</label>
                                <input type="date" class="form-control" id="AwardDate2"
                                    name="date_of_receiving_award_2">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardType2" class="form-label">National or International Award
                                    2</label>
                                <input type="text" class="form-control" id="AwardType2"
                                    name="national_or_international_award_2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="AwardDocument2" class="form-label">Award Document 2</label>
                            <input type="file" class="form-control" id="AwardDocument2" name="award_document_2">
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="AwardName3" class="form-label">Award Name 3</label>
                                <input type="text" class="form-control" id="AwardName3" name="award_name_3">
                            </div>
                            <div class="mb-3">
                                <label for="AwardedBy3" class="form-label">Awarded By 3</label>
                                <input type="text" class="form-control" id="AwardedBy3" name="awarded_by_3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardDate3" class="form-label">Date of Receiving Award 3</label>
                                <input type="date" class="form-control" id="AwardDate3"
                                    name="date_of_receiving_award_3">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardType3" class="form-label">National or International Award
                                    3</label>
                                <input type="text" class="form-control" id="AwardType3"
                                    name="national_or_international_award_3">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="AwardDocument3" class="form-label">Award Document 3</label>
                            <input type="file" class="form-control" id="AwardDocument3" name="award_document_3">
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardName4" class="form-label">Award Name 4</label>
                                <input type="text" class="form-control" id="AwardName4" name="award_name_4">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardedBy4" class="form-label">Awarded By 4</label>
                                <input type="text" class="form-control" id="AwardedBy4" name="awarded_by_4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="AwardDate4" class="form-label">Date of Receiving Award 4</label>
                                <input type="date" class="form-control" id="AwardDate4"
                                    name="date_of_receiving_award_4">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="AwardType4" class="form-label">National or International Award
                                    4</label>
                                <input type="text" class="form-control" id="AwardType4"
                                    name="national_or_international_award_4">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="AwardDocument4" class="form-label">Award Document 4</label>
                            <input type="file" class="form-control" id="AwardDocument4" name="award_document_4">
                        </div>
                    </div>
                </div>

                <!-- Research Publication -->
                <div class="card mb-3">
                    <h5 class="card-header">Research Publication</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="CorrespondingAuthor" class="form-label">Corresponding
                                    Author</label>
                                <input type="text" class="form-control" id="CorrespondingAuthor"
                                    name="corresponding_author">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="PublicationCode" class="form-label">Publication Code</label>
                                <input type="text" class="form-control" id="PublicationCode" name="publication_code">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md">
                                <label for="Author1" class="form-label">Author 1 from JIIT</label>
                                <input type="text" class="form-control" id="Author1" name="author_1_from_jiit">
                            </div>
                            <div class="mb-3 col-md">
                                <label for="Author2" class="form-label">Author 2 from JIIT</label>
                                <input type="text" class="form-control" id="Author2" name="author_2_from_jiit">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="PublicationDocument" class="form-label">Publication Document</label>
                            <input type="file" class="form-control" id="PublicationDocument"
                                name="publication_document">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection