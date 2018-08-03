<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function bindingcombo($table,$name,$fValue,$fLabel,$class='',$atas='')
{
	$CI=& get_instance();
	$CI->load->library('database_library');
	$CI->database_library->pake_table($table);
	$isdata=$CI->database_library->ambil_data();
	echo '<select name="'.$name.'" class="'.$class.'">';
	echo $atas;
	foreach($isdata as $row)
	{
		$options[] = array(
                 $row->$fValue=>$row->$fLabel,
                );
		echo '<option value="'.$row->$fValue.'">'.$row->$fLabel.'</option>';
	}
	
	echo '</select>';
}

function dropdo($table,$name,$field,$pk,$class,$kondisi=null,$selected=null,$data=null,$tags=null)
{
   $CI =& get_instance();
   echo"
       <select name='".$name."' class='form-control' $tags>";
        if(empty($kondisi))
        {
            $CI->db->order_by($field,'DESC');
            $record=$CI->db->get($table)->result();
        }
        else
        {
            $CI->db->order_by($field,'ASC');
            $record=$CI->db->get_where($table,$kondisi)->result();
        }
        foreach ($record as $r)
        {
            echo " <option value='".$r->$pk."' ";
            echo $r->$pk==$selected?'selected':'';
            echo ">".($r->$field)."</option>";
        }
            echo"</select>";
}


function getdata($table,$field)
{
	$CI=& get_instance();
	$CI->load->library('database_library');
	$CI->database_library->pake_table($table);
	$isdata=$CI->database_library->ambil_data();
	foreach($isdata as $row)
	{
		echo $row->$field;
	}
}
