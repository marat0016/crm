<div class="newInputClass" data-type="7" data-new="true">
    <p><span class="newInputTitle">
        <a data-toggle="tooltip" data-placement="right" title="Измените значение" href="#" onclick="editInputTitle(this);"><?=$name;?></a></span>
        <a class="pull-right text-muted" href="#" onclick="removeNewInput(this);">[x]</a>&nbsp;
        <a class="pull-right m-r-xs text-muted" href="#" onclick="changePosition(this);" data-type="up"><i class="i i-arrow-up text"></i><i class="i i-arrow-up text-active"></i></a>
        <a class="pull-right m-r-xs text-muted" href="#" onclick="changePosition(this);" data-type="down"><i class="i i-arrow-down text"></i><i class="i i-arrow-down text-active"></i></a>
    </p>
    <input name="extra_fields[]" type="text" class="form-control" data-trigger="change" data-required="true" data-type="url">
</div>