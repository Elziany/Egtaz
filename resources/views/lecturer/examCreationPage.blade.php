<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Questions</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Bootstrap Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{asset('../css/quest.css')}}">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/new-egtaz-2.png">
</head>
<body>
@if($errors->any())
        @foreach($errors->all() as $error)
       
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><h3>{{$error}}</h3></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endforeach
@endif
    
        <!-- Main -->
    <div class="title">
        <h1 class="heading">Exam <span>Form</span></h1>
    </div>

    <div class="quest container w-75">
        <form class="row" method="POST" action="{{route('createExam',[$lecturer->id,$code])}}">
            @csrf
        <div id="type" class="col-12">
                <label for="q" class="form-label">Exam Name <span class="req">*</span></label>
                <input type="text" name="exam_name" class="form-control" id="deg" name="exam_name" required>
            </div>
            <div id="type" class="col-12">
                <label for="q" class="form-label">Number of Questions <span class="req">*</span></label>
                <input type="number" name="question_number" class="form-control" id="deg" placeholder="0" min="0" required>
            </div>
            
           
            <div class="deg col-12 mt-3">
                <label for="deg" class="form-label">Total degree of Question <span class="req">*</span></label>
                <input type="number" name="total_degree" class="form-control" id="deg" placeholder="0" min="0" required>
            </div>
            <div class="opt col-12 mt-3">
                <label for="opt1" class="form-label">Start date of exam</label>
                <input type="datetime-local" name="start_date" class="form-control" id="opt1" required>
            </div>
           
            <div class="opt col-12 mt-3">
                <label for="opt1" class="form-label">End date of exam</label>
                <input type="datetime-local" class="form-control" id="opt1" name="end_date" required>
            </div>
            
           
           
            <input class="btn btn-primary mt-4 w-100" type="submit" value="Generate">
        </form>
    </div>

        <!-- Bootstrap Files -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>