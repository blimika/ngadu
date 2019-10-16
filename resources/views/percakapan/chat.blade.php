@if (Session::has('pesan_berhasil_tersimpan'))
        <div class="alert alert-info  alert-dismissible fade show" role="alert">
            {{ Session::get('pesan_berhasil_tersimpan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (Session::has('pesan_gagal_tersimpan'))
        <div class="alert alert-danger  alert-dismissible fade show" role="alert">
            {{ Session::get('pesan_gagal_tersimpan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
<div class="panel panel-primary">
    <div class="panel-collapse" >
    <div class="panel-body">
        <ul class="chat">
            
            @foreach($pesan as $msg)
            <li class="left clearfix">
                <div class="chat-body clearfix">
                    <div class="header">
                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span></small>
                        @if(Auth()->user()->isAdminCreator($msg->id_user))
                        <strong class="pull-left primary-font">{{$msg->nama_user}} (Admin)</strong>
                        @else
                        <span class="pull-left primary-font">{{$msg->nama_user}}</span>
                        @endif
                        
                    </div>
                    <p>{{$msg->isi_pesan}}
                    </p>
                </div>
            </li>
           
            @endforeach
        </ul>
    </div>
    <div class="panel-footer">
            <form id="tambahpesan" method="post" action="{{route('percakapan.prosestambahpesan')}}" enctype="multipart/form-data">
                @csrf
        <div class="input-group">
            <input id="btn-input" type="text" class="form-control input-sm" id="isi_pesan" placeholder="Isikan Pesan Yang Ingin Anda Sampaikan" name="isi_pesan" />
            <span class="input-group-btn">
                <button class="btn btn-warning btn-sm" id="btn-chat" type="submit">
                    Send</button>
            </span>
        </div>
        <input type="hidden" id="id_pengaduan" name="id_pengaduan" value="{{$id_pengaduan}}" />
            </form>
    </div>
</div>
</div>