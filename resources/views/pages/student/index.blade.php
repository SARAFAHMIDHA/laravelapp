@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
        <div class="card">
            <div class="cardheader">
                <h4>tbl_student</h4>
            </div>
            <div class="cardbody">

            
        <table class="table">
         <thead>
          <tr>
      <th>id</th>
      <th>Name</th>
      <th>Fk_parent_id</th>
      <th>Gender</th>
    
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td>1</td>
      <th>Anju</th>
      <th>1</th>
      <th>F</th>
    </tr>
    <tr>
      <td>2</td>
      <th>Alex</th>
      <th>2</th>
      <th>M</th>
    </tr>
    <tr>
      <td>3</td>
      <th>Rols</th>
      <th>2</th>
      <th>M</th>
    </tr>
    <tr>
      <td>4</td>
      <th>David</th>
      <th>3</th>
      <th>M</th>
    </tr>
    <tr>
      <td>5</td>
      <th>Abi</th>
      <th>4</th>
      <th>M</th>
    </tr>
    <tr>
      <td>6</td>
      <th>Jinu</th>
      <th>5</th>
      <th>F</th>
    </tr>
    <tr>
      <td>7</td>
      <th>Aju</th>
      <th>5</th>
      <th>M</th>
    </tr>
    
  </tbody>
</table>
</div>
        </div>
        </div>

    </div>

</div>

@endsection

