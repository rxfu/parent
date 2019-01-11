@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="md-3 font-weight-normal">请{{ Auth::user()->parent()->xm }}同学输入监护人信息</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/parent') }}" aria-label="监护人信息录入">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="xh" class="col-md-2 col-form-label">学号</label>
                            <div class="col-md-10">
                                <input type="text" id="xh" name="xh" class="form-control-plaintext" value="{{ Auth::user()->parent()->xh }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xm" class="col-md-2 col-form-label">姓名</label>
                            <div class="col-md-10">
                                <input type="text" id="xm" name="xm" class="form-control-plaintext" value="{{ Auth::user()->parent()->xm }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zjlx" class="col-md-2 col-form-label">身份证件类型</label>
                            <div class="col-md-10">
                                <input type="text" id="zjlx" name="zjlx" class="form-control-plaintext" value="{{ Auth::user()->parent()->zjlx }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="zjhm" class="col-md-2 col-form-label">身份证件号码</label>
                            <div class="col-md-10">
                                <input type="text" id="zjhm" name="zjhm" class="form-control-plaintext" value="{{ Auth::user()->parent()->zjhm }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sfzz" class="col-md-2 col-form-label">是否在职</label>
                            <div class="col-md-10">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="zz" name="sfzz" value="是" {{ Auth::user()->parent()->sfzz === '是' ? ' checked' : '' }}>
                                    <label class="form-check-label" for="zz">是</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="fzz" name="sfzz" value="否"{{ Auth::user()->parent()->sfzz === '否' ? ' checked' : '' }}>
                                    <label class="form-check-label" for="zz">否</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rxrq" class="col-md-2 col-form-label">入学日期</label>
                            <div class="col-md-10">
                                <input type="text" id="rxrq" name="rxrq" class="form-control-plaintext" value="{{ Auth::user()->parent()->rxrq }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="xjzt" class="col-md-2 col-form-label">学籍状态</label>
                            <div class="col-md-10">
                                <input type="text" id="xjzt" name="xjzt" class="form-control-plaintext" value="{{ Auth::user()->parent()->xjzt }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fmxm1" class="col-md-2 col-form-label">父母或监护人姓名1</label>
                            <div class="col-md-10">
                                <input type="text" id="fmxm1" name="fmxm1" class="form-control" placeholder="父母或监护人姓名1" value="{{ Auth::user()->parent()->fmxm1 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fmzjlx1" class="col-md-2 col-form-label">父母或监护人证件类型1</label>
                            <div class="col-md-10">
                                <select id="fmzjlx1" name="fmzjlx1" class="form-control">
                                    @foreach ($type as $type)
                                        <option value="{{ $type }}"{{ Auth::user()->parent()->fmzjlx1 === $type ? ' selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fmzjhm1" class="col-md-2 col-form-label">父母或监护人证件号码1</label>
                            <div class="col-md-10">
                                <input type="text" id="fmzjhm1" name="fmzjhm1" class="form-control" placeholder="父母或监护人证件号码1" value="{{ Auth::user()->parent()->fmzjhm1 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fmxm2" class="col-md-2 col-form-label">父母或监护人姓名2</label>
                            <div class="col-md-10">
                                <input type="text" id="fmxm2" name="fmxm2" class="form-control" placeholder="父母或监护人姓名2" value="{{ Auth::user()->parent()->fmxm2 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fmzjlx2" class="col-md-2 col-form-label">父母或监护人证件类型2</label>
                            <div class="col-md-10">
                                <select id="fmzjlx2" name="fmzjlx2" class="form-control">
                                    @foreach ($type as $type)
                                        <option value="{{ $type }}"{{ Auth::user()->parent()->fmzjlx2 === $type ? ' selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fmzjhm2" class="col-md-2 col-form-label">父母或监护人证件号码2</label>
                            <div class="col-md-10">
                                <input type="text" id="fmzjhm2" name="fmzjhm2" class="form-control" placeholder="父母或监护人证件号码2" value="{{ Auth::user()->parent()->fmzjhm2 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
