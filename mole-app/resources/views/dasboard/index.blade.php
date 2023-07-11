@extends('layouts.main')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

   

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Role Difficulties</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Tank</h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%" 
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Low</div>
                    </div>
                    <h4 class="small font-weight-bold">Support</h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Low - Medium</div>
                    </div>
                    <h4 class="small font-weight-bold">Mage</h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 50%"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Medium</div>
                    </div>
                    <h4 class="small font-weight-bold">Marksman</h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">Medium - High</div>
                    </div>
                    <h4 class="small font-weight-bold">Fighter</h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Medium - High</div>
                    </div>
                    <h4 class="small font-weight-bold">Assasin</h4>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">High</div>
                    </div>
                </div>
            </div>

            <!-- Color System -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            <strong>Tank</strong>
                            <br><br>
                            <div class="text-white-50 small">Tanks are roles that serve as team protectors. They have high durability and can absorb enemy attacks. 
                                This role is relatively easy to play because the main focus is on protecting the team and diverting enemy attention.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            <strong>Support</strong>
                            <br><br>
                            <div class="text-white-50 small">Supports are roles that provide assistance to the team through healing, debuffs, and other supportive abilities. 
                                Although this role does not require high mechanical skills, understanding strategies and coordination with the team are crucial.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            <strong>Mage</strong>
                            <br><br>
                            <div class="text-white-50 small">Mages are roles that use magic to deal significant damage to enemies from a distance. 
                                They have high burst damage abilities but tend to have lower durability. 
                                Controlling Mages requires a good understanding of skills and proper timing.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            <strong>Marksman</strong>
                            <br><br>
                            <div class="text-white-50 small">Marksmen are roles that rely on long-range attacks to deal high damage to enemies. 
                                They have strong attack power but are also vulnerable due to their low durability. 
                                Playing as a Marksman requires a good understanding of positioning and resource management.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                            Fighter
                            <br><br>
                            <div class="text-white-50 small"> the role of a fighter in Mobile Legends is to be a versatile frontline presence, 
                                engaging in fights, disrupting the enemy team, dealing sustained damage, and protecting their allies. 
                                With their well-rounded skill sets, fighters play a vital role in team compositions and contribute significantly 
                                to the overall success of the game.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            <strong>Assassin</strong>
                            <br><br>
                            <div class="text-white-50 small">Assassins are roles that excel in quick attacks and one-on-one kills. 
                                They tend to have low durability but possess high mobility. 
                                Playing as an Assassin requires good reaction speed, observation of opportunities, 
                                and understanding of when to engage or disengage from battles.</div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Map Illustrations</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="https://jurnalapps.co.id/assets/img/content/1576002606_mobile-legends-new-map.jpg" alt="...">
                    </div>
                    <p>This illustration depicts one of the maps in Mobile Legends called "Land of Dawn."
                         The map showcases a vast battlefield with various lanes and interesting features.
                     <br><br>
                     In the center of the image, there is a main lane that connects the blue team's base on the left to the red team's base on the right.
                    This lane is known as the "Mid Lane" and often serves as the primary battleground in the game. 
                    <br><br>
                    On the left side of the image, there is a lane known as the "Top Lane." This lane stretches from the blue team's base to the enemy territory on the right. 
                    Along this lane, there are defense towers that both teams must pass to reach the enemy's base. 
                    <br><br>
                    On the right side of the image, there is a lane known as the "Bottom Lane." This lane also stretches from the blue team's base to the red team's base
                    but passes through a different area compared to the Top Lane. Defense towers are also present along this lane.
                    <br><br>
                    In addition to the main lanes, there are other features that influence gameplay strategies. 
                    There are forests located on the left and right sides of the map. These forests serve as hiding places for monsters that 
                    players can defeat to gain additional advantages such as gold, XP, and buffs. Furthermore, there is a river that divides the map. 
                    The river provides tactical advantages such as natural barriers and the ability to evade enemies by swimming.
                    <br><br>
                    This illustration reflects the complexity of the map in Mobile Legends. Each lane and feature plays a crucial role in team strategies. Players must collaborate with their team to control these lanes, 
                    secure defense towers, and utilize other features to gain an edge in battles.
                    

                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Developer Info</h6>
                </div>
                <div class="card-body">
                    <strong>
                        This website are made for education only. Copyright are only by Moontoon who made Mobile Legends games to be interesting to play. 
                    </strong>
                    <p class="mb-0">Student of STT Nurul Fikri</p>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
                        
@endsection