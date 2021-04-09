<?php
include('header.php');
?>
<script>
    document.getElementById('lecture').className = "active";
</script>


<div align='center'>
    <br>
    <button class="button"><a href="lectureAdd.php">เพิ่มรายชื่ออาจารย์</a></button>

</div>
<br>
<div>
    <table>
        <tbody>
            <tr>
                <td style='color: #a73b23; padding: 3px; border-top: 1px solid #e6e6e6; border-left: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6; border-bottom: 1px solid #e6e6e6; border-top-left-radius: 4px; border-top-right-radius: 4px; background-color: #FAD7A0; text-align:center ;'>
                    <h2>รายชื่ออาจารย์</h2>
                </td>
            </tr>
            <td style='padding: 5px;border-left: 1px solid #e6e6e6; border-right: 1px solid #e6e6e6;'>
                <div class="div4">

                        <?php
    $sql = "SELECT * FROM lecture";
    $result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {
    ?>
                    <div>
						<form action="lecture_timetable.php" method="POST">
                        <table cellpadding="7px" >
                            <thead>
                                <th>รายชื่อ</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                                <tr class="div8">
                                    <td><input type="checkbox" name="teacher<?php echo $row['lec_id']?>">
										<?php echo 'อาจารย์ ' . $row['lecture_name'] ?></td>
                                    <td>
                                        <a href="lectureEdit.php?id=<?php echo $row['lec_id'] ?>">Edit</a>
                                        <a href="lectureDelete-inline_P.php?id=<?php echo $row['lec_id'] ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
						<br>
                                <select type="text" name="year">
                                    <option value="" selected disabled>--ปีการศึกษา--</option>
                                    <option value="2563">2563</option>
                                    <option value="2562">2562</option>
                                </select>

                                <select name="semester">
                                    <option value="" selected disabled>--ภาคการศึกษา--</option>
                                    <option value="1">ภาคต้น</option>
                                    <option value="2">ภาคปลาย</option>
                                    <option value="3">ภาคฤดูร้อน</option>
                                </select>
						<input type="submit" name="showbtn" value="แสดงตารางสอน">
						</form>
                        <?php } else {
        echo "No record found";
    }
    mysqli_close($dbcon);
    ?>
                    </div>
                  
                </div>
        </tbody>
    </table>
  

<br>
<br>
