@php
	echo "<option></option>";
    function NameGroups($ProductGroups, $prefix = '')  {
        foreach ($ProductGroups as $ProductGroup) {
            echo "<option value=".$ProductGroup->id.">".$prefix." ".$ProductGroup->name."</option>";
            NameGroups($ProductGroup->children, $prefix.'-');
        }
    };
    NameGroups($ProductGroup);
@endphp