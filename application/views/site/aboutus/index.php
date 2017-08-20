<style>
    table td {
        padding: 10px;
        border: 1px solid black;
    }
</style>
<div class="container-2">
  <section class="content">
  <h3>Giới Thiệu</h3>
    <table>
    <?php foreach ($about as $row): ?>
        <tr>
            <td>Hotline</td>
            <td><?php echo $row->hotline ?></td>
        </tr>
        <tr>
            <td>Gmail</td>
            <td><?php echo $row->gmail ?></td>
        </tr>
        <tr>
            <td>Facebook</td>
            <td><?php echo $row->facebook ?></td>
        </tr>
        <tr>
            <td>youtube</td>
            <td><?php echo $row->youtube ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
  </section>
<?php $this->load->view('site/aside') ?>
</div><!--end:container-2-->