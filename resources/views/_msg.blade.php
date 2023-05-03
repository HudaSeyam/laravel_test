<!-- Display Validation Errors -->
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Display Session Flash Message -->
@if(Session::get("msg"))
    <?php
        $msg = Session::get("msg");
        $msgClass = "alert-info";
        if(strtolower(substr($msg,0,2))=='e:'){
            $msg = substr($msg,2);
            $msgClass = "alert-danger";
        }
        else if(strtolower(substr($msg,0,2))=='w:'){
            $msg = substr($msg,2);
            $msgClass = "alert-warning";
        }
        else if(strtolower(substr($msg,0,2))=='s:'){
            $msg = substr($msg,2);
            $msgClass = "alert-success";
        }
        else if(strtolower(substr($msg,0,2))=='i:'){
            $msg = substr($msg,2);
            $msgClass = "alert-info";
        }
    ?>
    <div class=" alert alert-{{ $msgClass }} alert-dismissible fade show" role="alert">
        {{ $msg }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif