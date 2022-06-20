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
@if($msg=Session::get('msg'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><h3>{{$msg}}</h3></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
    
        <!-- Main -->
    <div class="title">
        <h1 class="heading">Add <span>Question</span></h1>
    </div>

    <div class="quest container w-75">
        <form class="row" method="POST" action="{{route('createQuestion',[$lecturer->id,$exam_id,$code])}}">
            @csrf
            <div id="type" class="col-12">
                <label for="q" class="form-label">Type of Question <span class="req">*</span></label>
                <select class="form-select" name="type"  id="q">
                    <option value="MCQ">MCQ Questions</option>
                    <option value="True & False">True & False Questions</option>
                    <option value="Essay">Essay Questions</option>
                    <option value="Drawing">Drawing Questions</option>
                    <option value="Coding">Coding Questions</option>
                </select>
            </div>
            
            <div class="col-12 mt-3" id="question">
                <label for="quest" class="form-label">Question <span class="req">*</span></label>
                <input class="form-control" name="question_body" id="quest" placeholder="Insert The Question" required>
            </div>
            <div class="deg col-12 mt-3">
                <label for="deg" class="form-label">Degree of Question <span class="req">*</span></label>
                <input type="number" class="form-control" name="degree" id="deg" placeholder="10" min="0" required>
            </div>
            <div class="opt col-12 mt-3">
                <label for="opt1" class="form-label">Option 1</label>
                <input type="text" class="form-control" name="option1"id="opt1" placeholder="option One">
            </div>
            <div class="opt col-12 mt-3">
                <label for="opt2" class="form-label">Option 2</label>
                <input type="text" class="form-control"name="option2" id="opt2" placeholder="option Two">
            </div>
            <div class="opt col-12 mt-3">
                <label for="opt3" class="form-label">Option 3</label>
                <input type="text" class="form-control"name="option3" id="opt3" placeholder="option Three" > 
            </div>
            
            <div id="answer" class="col-12 mt-4">
                
            <label for="a" class="form-label">Correct Answers <span class="req">*</span></label>
                
            <input type="text" class="form-control" name="correct_answer1" id="opt3" placeholder="Answer one" required>
</div>
            <div id="answer" class="col-12 mt-4">
                <input type="text" class="form-control" name="correct_answer2" id="opt3" placeholder="Answer two" required>
</div>
<div id="answer" class="col-12 mt-4">
                <input type="text" class="form-control" name="correct_answer3" id="opt3" placeholder="Answer Three" required>
                <button class="btn btn-primary mt-4 w-100" type="submit">Generate</button>
            </div>
        </form>
        <a class="btn btn-primary mt-4 w-100" href="{{route('examFinish',[$lecturer->id,$exam_id,$code])}}">Finish</a>
    </div>

        <!-- Bootstrap Files -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>