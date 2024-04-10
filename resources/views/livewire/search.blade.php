<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="input-group mb-3">
        <input wire:model.live="search" type="search" class="form-control border-bottom"
            placeholder="Search posts by title...">
    </div>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Timestamp</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">JIIT Employee Code</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Category</th>
                    <th scope="col">Nature of Employment</th>
                    <th scope="col">Department</th>
                    <th scope="col">Date of Joining JIIT Noida</th>
                    <th scope="col">Designation on Joining JIIT Noida</th>
                    <th scope="col">Date of Last Promotion</th>
                    <th scope="col">Designation on Promotion</th>
                    <th scope="col">Graduation</th>
                    <th scope="col">Year of Completing Graduation</th>
                    <th scope="col">Institute Name and Place (Graduation)</th>
                    <th scope="col">Post Graduation </th>
                    <th scope="col">Year of Completing Masters Program</th>
                    <th scope="col">Institute Name and Place (Post Graduation) </th>
                    <th scope="col">Higher Education</th>
                    <th scope="col">Completed PhD</th>
                    <th scope="col">Year of Completion (PhD)</th>
                    <th scope="col">Year of Award (Doctoral Degree)</th>
                    <th scope="col">Institute Name and Place (PhD)</th>
                    <th scope="col">Total Experience (in months) before Joining JIIT Noida </th>
                    <th scope="col">Total Academic Institute Experience (in months)</th>
                    <th scope="col">Last Academic Institute Served</th>
                    <th scope="col">
                        Service Duration at Last Served Academic Institute (in
                        months)
                    </th>
                    <th scope="col">
                        Total Experience in Research Institutes (in months)
                    </th>
                    <th scope="col">Last Research Institute Served</th>
                    <th scope="col">
                        Service Duration at Last Served Research Institute (in
                        months)
                    </th>
                    <th scope="col">
                        Total Experience in Industries (in months)
                    </th>
                    <th scope="col">Last Organization</th>
                    <th scope="col">
                        Service Duration at Last Organization (in months)
                    </th>
                    <th scope="col">
                        Total Experience in Other Organizations (in months)
                    </th>
                    <th scope="col">Total National Awards</th>
                    <th scope="col">Total International Awards</th>
                    <th scope="col">Award Name 1</th>
                    <th scope="col">Awarded By 1</th>
                    <th scope="col">Date of Receiving Award 1</th>
                    <th scope="col">National or International Award 1</th>
                    <th scope="col">Award Document 1</th>
                    <th scope="col">Award Name 2</th>
                    <th scope="col">Awarded By 2</th>
                    <th scope="col">Date of Receiving Award 2</th>
                    <th scope="col">National or International Award 2</th>
                    <th scope="col">Award Document 2</th>
                    <th scope="col">Award Name 3</th>
                    <th scope="col">Awarded By 3</th>
                    <th scope="col">Date of Receiving Award 3</th>
                    <th scope="col">National or International Award 3</th>
                    <th scope="col">Award Document 3</th>
                    <th scope="col">Awarded By 4</th>
                    <th scope="col">Date of Receiving Award 4</th>
                    <th scope="col">National or International Award 4</th>
                    <th scope="col">Award Document 4</th>
                    <th scope="col">Corresponding Author</th>
                    <th scope="col">Publication Code</th>
                    <th scope="col">Author 1 from JIIT</th>
                    <th scope="col">Author 2 from JIIT</th>
                    <th scope="col">Publication Document</th>
                </tr>
            </thead>
            <div class="d-flex justify-content-center">
                <div wire:loading class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <tbody class="table-group-divider">
                @foreach($faculties as $faculty)
                <tr>
                    <th scope="row">{{$faculty->id}}</th>
                    <th scope="row">{{$faculty->created_at}}</th>
                    <th scope="row">{{$faculty->name}}</th>
                    <th scope="row">{{$faculty->email_address}}</th>
                    <th scope="row">{{$faculty->jiit_employee_code}}</th>
                    <th scope="row">{{$faculty->date_birth}}</th>
                    <th scope="row">{{$faculty->category}}</th>
                    <th scope="row">{{$faculty->nature_of_employment}}</th>
                    <th scope="row">{{$faculty->department}}</th>
                    <th scope="row">{{$faculty->date_joining_jiit_noida}}</th>
                    <th scope="row">{{$faculty->designation_on_joining_jiit_noida}}</th>
                    <th scope="row">{{$faculty->date_of_last_promotion}}</th>
                    <th scope="row">{{$faculty->designation_on_promotion}}</th>
                    <th scope="row">{{$faculty->graduation}}</th>
                    <th scope="row">{{$faculty->year_of_completing_graduation}}</th>
                    <th scope="row">{{$faculty->institute_name_and_place_graduation}}</th>
                    <th scope="row">{{$faculty->post_graduation}}</th>
                    <th scope="row">{{$faculty->year_of_completing_masters_program}}</th>
                    <th scope="row">{{$faculty->institute_name_and_place_post_graduation}}</th>
                    <th scope="row">{{$faculty->completed_phd}}</th>
                    <th scope="row">{{$faculty->year_of_completion_phd}}</th>
                    <th scope="row">{{$faculty->year_of_award_doctoral_degree}}</th>
                    <th scope="row">{{$faculty->institute_name_and_place_phd}}</th>
                    <th scope="row">{{$faculty->total_experience_months_before_joining_jiit_noida}}</th>
                    <th scope="row">{{$faculty->total_academic_institute_experience_months}}</th>
                    <th scope="row">{{$faculty->last_academic_institute_served}}</th>
                    <th scope="row">{{$faculty->service_duration_last_served_academic_institute_months}}</th>
                    <th scope="row">{{$faculty->total_experience_research_institutes_months}}</th>
                    <th scope="row">{{$faculty->last_research_institute_served}}</th>
                    <th scope="row">{{$faculty->service_duration_last_served_research_institute_months}}</th>
                    <th scope="row">{{$faculty->total_experience_industries_months}}</th>
                    <th scope="row">{{$faculty->last_organization}}</th>
                    <th scope="row">{{$faculty->service_duration_last_organization_months}}</th>
                    <th scope="row">{{$faculty->total_experience_other_organizations_months}}</th>
                    <th scope="row">{{$faculty->total_national_awards}}</th>
                    <th scope="row">{{$faculty->total_international_awards}}</th>
                    <th scope="row">{{$faculty->award_name_1}}</th>
                    <th scope="row">{{$faculty->awarded_by_1}}</th>
                    <th scope="row">{{$faculty->date_of_receiving_award_1}}</th>
                    <th scope="row">{{$faculty->national_or_international_award_1}}</th>
                    <th scope="row">{{$faculty->award_document_1}}</th>
                    <th scope="row">{{$faculty->award_name_2}}</th>
                    <th scope="row">{{$faculty->awarded_by_2}}</th>
                    <th scope="row">{{$faculty->date_of_receiving_award_2}}</th>
                    <th scope="row">{{$faculty->national_or_international_award_2}}</th>
                    <th scope="row">{{$faculty->award_document_2}}</th>
                    <th scope="row">{{$faculty->award_name_3}}</th>
                    <th scope="row">{{$faculty->awarded_by_3}}</th>
                    <th scope="row">{{$faculty->date_of_receiving_award_3}}</th>
                    <th scope="row">{{$faculty->national_or_international_award_3}}</th>
                    <th scope="row">{{$faculty->award_document_3}}</th>
                    <th scope="row">{{$faculty->award_name_4}}</th>
                    <th scope="row">{{$faculty->awarded_by_4}}</th>
                    <th scope="row">{{$faculty->date_of_receiving_award_4}}</th>
                    <th scope="row">{{$faculty->national_or_international_award_4}}</th>
                    <th scope="row">{{$faculty->award_document_4}}</th>
    
                    <th scope="row">{{$faculty->corresponding_author}}</th>
                    <th scope="row">{{$faculty->publication_code}}</th>
                    <th scope="row">{{$faculty->author_1_from_jiit}}</th>
                    <th scope="row">{{$faculty->author_2_from_jiit}}</th>
         
                    <th scope="row">{{$faculty->publication_document}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div> 