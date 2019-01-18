@php
    function ShowGroups($ProductGroups)  {
        echo "<ol class='dd-list'>";
        foreach ($ProductGroups as $ProductGroup) {
            echo "<li class='dd-item dd3-item' data-id=".$ProductGroup->id.">";
            echo "<div class='dd-handle dd3-handle'></div>";
            echo "<div class='dd3-content' data-name=".$ProductGroup->name.">".$ProductGroup->name;
            echo "<a href='javascript:void(0);' class='float-right'><i class='material-icons list-icon delete'>close</i></a>";
            echo "<a href='javascript:void(0);' class='float-right'><i class='material-icons list-icon edit'>edit</i></a>";                                                       
            echo "</div>";
            ShowGroups($ProductGroup->children);
            echo "</li>";
        }
        echo "</ol>";
    };
    ShowGroups($ProductGroup);
@endphp