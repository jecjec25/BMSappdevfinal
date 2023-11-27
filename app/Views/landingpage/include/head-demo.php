<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <!-- Title Page-->
    <title>Barangays in Calapan</title>

    <!-- Fontfaces CSS-->

    <!-- Vendor CSS-->

</head>


            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="card">
                            
                            <div class="card-body"> 
                                <table class="table table-bordered tbl">
                                    
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Barangay</th>
                                            <th>Land Area (has)</th>
                                            <th>2015 Population</th>
                                            <th>2020 Population Density (Population/has)</th>
                                            <th>2020 Projected</th>
                                            <th>Projected 2023 household</th>
                                            <th>2020 Household</th>
                                            <th>2023 Household</th>
                                            <th>Growth Rate</th>                  
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($demographicdata as $row) : ?>
                                        <tr>
                                            <td><?= $row['number'] ?></td>
                                            <td><?= $row['barangay'] ?></td>
                                            <td><?= $row['landarea'] ?></td>
                                            <td><?= $row['popu2015'] ?></td>
                                            <td><?= $row['popuden2020'] ?></td>
                                            <td><?= $row['popu2020'] ?></td>
                                            <td><?= $row['projpopu2023'] ?></td>
                                            <td><?= $row['household2020'] ?></td>
                                            <td><?= $row['household2023'] ?></td>
                                            <td><?= $row['growthrate'] ?></td>
                                        
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

   
</body>

</html>
<!-- end document-->
