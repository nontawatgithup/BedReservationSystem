
<div class="form-group {{ $errors->has('name_Ward') ? 'has-error' : ''}}">
    <label for="name_Ward" class="control-label">{{ 'ชื่อวอร์ด' }}</label>
    <input class="form-control" name="name_Ward" type="text" id="name_Ward" value="{{ isset($ward->name_Ward) ? $ward->name_Ward : ''}}" >
    {!! $errors->first('name_Ward', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'อัพเดต ' : 'บันทึก' }}">
</div>
