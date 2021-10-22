<?php   
    $title='View Records';
    require 'includes/header.php';
    require_once './db/conn.php';

    $results = $crud->getAttendees();
?>

    <table class="table">
        <tr class="table-primary">
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Email Address</th>
            <th>Contact Number</th>
            <th>Specialty</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr class="table-secondary">
            <td><?php echo $r['attendee_id']; ?></td>
            <td><?php echo $r['firstname']; ?></td>
            <td><?php echo $r['lastname']; ?></td>
            <td><?php echo $r['dateofbirth']; ?></td>
            <td><?php echo $r['emailaddress']; ?></td>
            <td><?php echo $r['contactnumber']; ?></td>
            <td><?php echo $r['name']; ?></td>
        </tr>
        <?php } ?>
    </table>



<?php require 'includes/footer.php'; ?>