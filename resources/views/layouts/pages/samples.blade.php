@include('layouts.includes.head')
@include('layouts.includes.nav')


<div class="container-fluid mb-5 bg-success">
    <div class="container mt-5 pt-4 pb-5 bg-light mx-3">
        <h6 class="fw-bold">SAMPLE</h6>
        <div class="row ">
            <div class="col">
        <div class="row mt-3 px-4">
            <div class="col"><ul class="list-unstyled">
        <li class="fw-bold">Expository Essay</li>
        <li>Paper title: Online Education</li>
        <li>Academic level: College</li>
        <li>Discipline: English 101</li>
        <li>Paper Format: MLA</li>
        <li>Sources: 2</li>
    </ul></div>
            <div class="col">
            <ul class="list-unstyled">
        <li class="fw-bold">Analysis Essay</li>
        <li>Paper title: Advantages and Disadvantages of Lowering the Voting Age to Thirteen</li>
        <li>Academic level: College</li>
        <li>Discipline: Political sciences</li>
        <li>Paper Format: APA</li>
        <li>Sources: 1</li>
    </ul>
            </div>
            
        </div>
        <div class="row px-4">
            <div class="col">
            <ul class="list-unstyled">
        <li class="fw-bold">Argumentative Essay</li>
        <li>Paper title: Keeping Animals in Zoos Is not Justifiable</li>
        <li>Academic level: College</li>
        <li>Discipline: Ethics</li>
        <li>Paper Format: APA</li>
        <li>Sources: 5</li>
    </ul></div>
            <div class="col">
            <ul class="list-unstyled">
        <li class="fw-bold">Critical Essay</li>
        <li>Paper title: Having Cell Phones in Elementary School</li>
        <li>Academic level: College</li>
        <li>Discipline: Education</li>
        <li>Paper Format: MLA</li>
        <li>Sources: 3</li>

    </ul>
   
            </div>
            
        </div>
        </div>
        @include('layouts.includes.row-custom')
        </div>
       
      
        
        
       
    </div>
    
</div>

@include('layouts.includes.slideshow')
@include('layouts.includes.footer')