
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">

    <form>
        <label for="party">วันที่จอง</label>
        <input id="party" type="datetime-local" name="partydate">
        <label for="party">วันที่ใช้</label>
        <input id="party" type="datetime-local" name="partydate">
    </form><br>
    <label for="title" class="control-label">{{ 'วอร์ด' }}</label>
    <select class="form-control form-control-sm" name="Operation_ID_Operation">
        <option>อภิบาลผู้ป่วย 3จ.</option>
        <option>อภิบาลผู้ป่วย 3ง</option>
    </select><br>

    <label for="title" class="control-label">{{ 'HN' }} c</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    <label for="title" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    <label for="title" class="control-label">{{ 'เบอร์' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    <label for="input-sm">หัตถการ</label>
    <select class="form-control form-control-sm" name="Operation_ID_Operation">
        <option>DSA</option>
        <option>Cerebral Angiogram</option>
        <option>Embolization with Balloon</option>
        <option>Embolization with Balloon occlusion test</option>
        <option>Embolization with NBCA</option>
    </select><br>
    <label for="title" class="control-label">{{ 'อาจารย์แพทย์' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    <label for="title" class="control-label">{{ 'แผนกการรักษา' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    <label for="title" class="control-label">{{ 'การวินิจฉัยโรค' }}</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea><br>

</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'บันทึก' : 'บันทึก' }}">
</div>
