@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
        <div class="card">
            <div class="cardheader">
                <h4>tbl_course</h4>
            </div>
            <div class="cardbody">

            
        <table class="table">
         <thead>
          <tr>
      <th>id</th>
      <th>Course name</th>
      <th>dept</th>
    
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td>1</td>
      <th>English</th>
      <th>English</th>
      </tr>
      <tr>
      <td>2</td>
      <th>Mathematics</th>
      <th>Maths</th>
      </tr>
      <tr>
      <td>3</td>
      <th>Science</th>
      <th>Science</th>
      </tr>
      <tr>
      <td>4</td>
      <th>Economics</th>
      <th>Science</th>
      </tr>
    
  </tbody>
</table>
</div>
        </div>
        </div>

    </div>

</div>

@endsection

