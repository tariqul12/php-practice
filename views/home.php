<?php include "header.php"; ?>
<input type="text" />
<br>
<textarea></textarea>
<br>

<select>
    <option>select Option</option>
    <option>dhaka</option>
    <option>barishal</option>
    <option>Kholna</option>
    <option>Noakhali</option>
</select>
<br>
<input type="radio" />
<input type="checkbox" />
<input type="data" />
<input type="file" />
<ol>
    <li>
        Mango
        <ol>
            <li>am</li>
            <li>jackpot</li>
            <li>jackpot</li>
            <li>jackpot</li>
        </ol>
    </li>
    <li>Benana</li>
    <li>Apple</li>
</ol>

<ul>
    <li>
        Dhaka
        <ul>
            <li>savar</li>
            <li>mirpur</li>
            <li>Banani</li>
        </ul>
    </li>
    <li>Barisal</li>
    <li>gajipur</li>
    <li>Noakhali</li>
</ul>
<a href="https://www.prothomalo.com/bangladesh" target="_blank">BITM</a>
<h1>This is heading</h1>
<h2>This is heading</h2>
<h3>This is heading</h3>
<h3>This is heading</h3>
<h4>This is heading</h4>
<h5>This is heading</h5>
<h6>This is heading</h6>
<a href="https://www.bitm.org.bd/">BITM</a>
<img src="assests/img.jpg" height="300" width="300"/>
<table border="1" width="800">
    <tr>
        <th>SL NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>
    <?php foreach ($students as $key=> $student) { ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $student["name"] ?></td>
            <td><?php echo $student["email"] ?></td>
            <td><?php echo $student["mobile"] ?></td>
        </tr>
    <?php } ?>
</table>
<?php include "footer.php" ?>
