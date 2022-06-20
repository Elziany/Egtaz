<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egtaz Exam</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Bootstrap Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Main CSS Files -->
        <link rel="stylesheet" href="{{asset('../css/exam.css')}}">
        <link rel="stylesheet" href="{{asset('../css/main.css')}}">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/new-egtaz-2.png">
</head>
<body>
    
    <!-- Info Box -->
    <button data-modal-target="#modal" id="click">Check your rules</button>    

    <div class="modal" id="modal">
        <div class="modal_header">
            <h2 class="title">some <span>rules</span> you must to follow:</h2>
            <button data-close-button class="close_btn">&times;</button>
        </div>

        <div class="info_list modal_body">
            <div class="info"><span>1.</span> You will have only <span>1:30 minutes</span> per the exam.</div>
            <div class="info"><span>2.</span> The total degree of the exam is <span>100 points</span>.</div>
            <div class="info"><span>3.</span> One you select your answer, you can't reselect.</div>
            <div class="info"><span>4.</span> You can't exit from the Quiz while you're playing.</div>
            <div class="info"><span>5.</span> You'll get points on the basis of your correct answers.</div>
        </div>

    </div>

    <div id="overlay"></div>


        <!-- Quiz Box -->
    <form class="quiz_box" action="" method="post">

        <header>
            <div class="title">{{$exam->exam_name}}</div>
            <div class="timer">
                <div class="time_text">Time Left</div>
                <div class="time_sec">1:30</div>
            </div>
        </header>

        <section>

            <div class="q">
                <h2 class="heads"><span>MCQ</span> Questions:</h2>
                @foreach($exam->question as $question)
                @if($question->type==='MCQ')
                <div class="quest">
                    <div class="que_text">
                        <span>{{$question->question_body}}</span>
                    </div>
                    <div class="option_list">
        
                        <div class="option">
                            <span>{{$question->option1}}</span>
                        </div>
        
                        <div class="option">
                            <span>{{$question->option2}}</span>
                        </div>
        
                        <div class="option">
                            <span>{{$question->option3}}</span>
                        </div>
        
                    </div>
                </div>
                @endif
                @endforeach
    
              
            <div class="q">
                <h2 class="heads"><span>True & False</span> Questions:</h2>
                @foreach($exam->question as $question)
                @if($question->type==='True & False')
                <div class="quest">
                    <div class="que_text">
                        <span>{{$question->question_type}}?</span>
                    </div>
                    <div class="option_list">
        
                        <div class="option">
                            <span>True</span>
                        </div>
        
                        <div class="option">
                            <span>False</span>
                        </div>
        
                    </div>
                </div>
    
               @endif
               @endforeach
               
            <div class="q">
                <h2 class="heads"><span>Essay</span> Questions:</h2>
                @foreach($exam->question as $question)
                @if($question->type==='Essay')
                <div class="quest">
                    <div class="que_text">
                        <span>{{$question->question_body}}?</span>
                    </div>
                    <div class="option_list">
        
                        <div class="inp_option">
                            <textarea name="" id="" rows="5"></textarea>
                        </div>
        
                    </div>
                </div>
    
               
            <div class="q">
                <h2 class="heads"><span>Drawing</span> Questions:</h2>
                <div class="quest">
                    <div class="que_text">
                        <span>Draw the roadmap of React.js to start</span>
                    </div>
                    <div class="option_list">
        
                        <div class="inp_option">
                            <input type="file">
                        </div>
        
                    </div>
                </div>

            </div>
            @endif
            @endforeach

            <div class="q">
                <h2 class="heads"><span>Coding</span> Questions:</h2>
                @foreach($exam->question as $question)
                @if($question->type==='Drawing')
                <div class="quest">
                    <div class="que_text">
                        <span>{{$question->question_body}}</span>
                    </div>
                    <div class="option_list">
        
                        <div class="inp_option">
                            <textarea name="" id="" rows="5"></textarea>
                        </div>
        
                    </div>
                </div>

            </div>
            @endif
            @endforeach

        </section>

            <!-- Quiz Box Footer -->
        <footer>
            <div class="tool_que">
                <span>
                    Dr. {{$exam->lecturer->name}}
                </span>
            </div>

            <button class="next_btn">Submit</button>
        </footer>

    </form>

        <!-- Bootstrap Files -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Main JS file -->
    <script src="{{asset('../js/exam.js')}}"></script>
    
</body>
</html>