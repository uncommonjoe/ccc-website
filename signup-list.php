<?php
/* Template Name: Signup List */

get_header();
?>

<div class="page-wrap" data-ng-controller="signupListController as vm">

	<div class="page-header">
        <div class="section-content">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>

	<div class="page-content">
		<div class="container px-5 padding-lg-top padding-xxl-bottom">
			<div class="row text-center mb-5">
				<div class="col-6 col-md-4 offset-md-2">
					<div>First Service</div>
					<div class="h2 font-800">{{vm.attendees[0].sumFirstService}}</div>
				</div>

				<div class="col-6 col-md-4">
					<div>Second Service</div>
					<div class="h2 font-800">{{vm.attendees[0].sumSecondService}}</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					
					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th class="font-sm align-middle" scope="col">Name</th>
									<th class="font-sm align-middle" scope="col">Email</th>
									<th class="font-sm align-middle" scope="col">9 AM</th>
									<th class="font-sm align-middle" scope="col">11 AM</th>
									<th class="font-sm align-middle" scope="col"></th>
								</tr>
							</thead>

							<tbody class="table-striped">
								<tr ng-repeat="attendee in vm.attendees">
									<td class="font-sm align-middle">{{attendee.name}}</th>
									<td class="font-sm align-middle">{{attendee.email}}</td>
									<td class="font-sm align-middle">{{attendee.firstService}}</td>
									<td class="font-sm align-middle">{{attendee.secondService}}</td>
									<td class="text-right">
										<button type="button" class="btn btn-danger btn-sm font-sm px-4 py-2" ng-click="vm.deleteSignup(attendee.id)" ng-disabled="vm.isLoading">Delete</button>
									</td> 
								</tr>
							</tbody>

							<tfoot>
								<tr>
								<td colspan="2" class="font-sm align-middle text-right font-800">Totals</td>
								<td class="font-sm align-middle font-800">{{vm.attendees[0].sumFirstService}}</td>
								<td class="font-sm align-middle font-800">{{vm.attendees[0].sumSecondService}}</td>
								<td></td>
							</tfoot>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>