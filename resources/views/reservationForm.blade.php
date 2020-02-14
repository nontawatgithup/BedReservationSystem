
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}" id="form-reservation"
     xmlns="http://www.w3.org/1999/html">

    <div class="container">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                    <label for="date_Reservation" class="col-sm-4 control-label">วันที่จอง</label>
                    <input id="party" type="datetime-local" name="partydate"><span>
                    <label for="useDate" class="col-sm-4 control-label">วันที่ใช้</label>
                    <input id="party" type="datetime-local" name="partydate"><br>
            </div>
        </form>
    </div>

    <label for="title" class="control-label">{{ 'วอร์ด' }}</label>
    <select class="form-control form-control-sm" name="Operation_ID_Operation">
        <option>อภิบาลผู้ป่วย 3จ.</option>
        <option>อภิบาลผู้ป่วย 3ง</option>
    </select><br>

    <label for="HN_Patient" class="control-label">{{ 'HN' }} </label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($reservation->HN_Patient) ? $reservation->HN_Patient : ''}}" >
    {!! $errors->first('HN_Patient', '<p class="help-block">:message</p>') !!}
    <label for="ID_Patient" class="control-label">{{ 'รหัสประชาชน' }} </label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($reservation->ID_Patient) ? $reservation->ID_Patient : ''}}" >
    {!! $errors->first('ID_Patient', '<p class="help-block">:message</p>') !!}
    <label for="name_Patient" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->name_Patient) ? $post->name_Patient : ''}}" >
    {!! $errors->first('name_Patient', '<p class="help-block">:message</p>') !!}
    <label for="tell_Patient" class="control-label">{{ 'เบอร์' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->tell_Patient) ? $post->tell_Patient : ''}}" >
    {!! $errors->first('tell_Patient', '<p class="help-block">:message</p>') !!}
    <label for="input-sm">หัตถการ</label>
    <select class="form-control form-control-sm" name="ID_Operation">
        <option>DSA</option>
        <option>Cerebral Angiogram</option>
        <option>Embolization with Balloon</option>
        <option>Embolization with Balloon occlusion test</option>
        <option>Embolization with NBCA</option>
    </select><br>
    <label for="staff_Number" class="control-label">{{ 'อาจารย์แพทย์' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->staff_Number) ? $post->staff_Number : ''}}" >
    {!! $errors->first('staff_Number', '<p class="help-block">:message</p>') !!}
    <label for="input-sm">แผนกการรักษา</label>
    <select class="form-control form-control-sm" name="ID_Operation">
        <option>Gen 1</option>
        <option>Gen 2</option>
        <option>Embolization with Balloon</option>
        <option>Embolization with Balloon occlusion test</option>
        <option>Embolization with NBCA</option>
    </select><br>
    {!! $errors->first('ID_Unit', '<p class="help-block">:message</p>') !!}
    <label for="detail_Reservation" class="control-label">{{ 'การวินิจฉัยโรค' }}</label>
    <textarea class="form-control" name="detail_Reservation" id="exampleFormControlTextarea1" rows="3" ></textarea><br>
</div>


