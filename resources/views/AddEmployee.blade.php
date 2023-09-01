<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>บันทึกข้อมูลบุคลากรภาควิชาอายุรศาสตร์</h1>
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
    <form method="post" action="/add-employee" >
            @csrf
            <label>รหัสเจ้าหน้าที่: </label>
            <input type="text" name="sap" id=""
                   value="{{ old('sap') }}">
            @error('sap')
                <div style="color:red">{{ $message }}</div>
            @enderror
            <br>

            <label>ชื่อ: </label>
            <input type="text" name="firstname" id="" value="{{ old('firstname') }}">
            @error('firstname')
                <div style="color:red">{{ $message }}</div>
            @enderror
            <br>

            <label>นามสกุล: </label>
            <input type="text" name="lastname" id="" value="{{ old('lastname') }}">
            @error('lastname')
                <div style="color:red">{{ $message }}</div>
            @enderror
            <br>

            <label>สังกัด: </label>
            <select name="division" >
                <option value="0">กรุณาเลือกสังกัด</option>
                <option value="1" {{ "1" === old('division') ? 'selected' : '' }}>สำนักงาน</option>
                <option value="2" {{ "2" === old('division') ? 'selected' : '' }}>สาขาวิชา</option>
            </select>
            @error('division')
            <div style="color:red">{{ $message }}</div>
            @enderror
             <br>
            <button type="submit"> บันทึก </button>
    </form>


</body>
</html>
