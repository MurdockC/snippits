<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";

	include('assets/includes/header.php');?>
		<div id="mobile-hide">
  		<style>
    		.margin--sm li {
      		margin: 3px;
    		}
    		H4 {
      		letter-spacing: .05em;
    		}



    		</style>


				<section style="min-height: 60vh;" id="body-content" class="container container--full-width white-bg ai--c jc--c container--column container--flex padding--lg">
					<h2>Positions</h2>
					<div id="benefits" class="container container--1200 container--flex wrap container__positions">
						<div class="container--flex margin--lg container--column-sm positions__column">
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>US OTR</button></a>
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>CANADA</button></a>
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>OWNER OPERATOR</button></a>
            </div>
						<div class="container--flex margin--lg container--column-sm positions__column">
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>MIDWEST REGIONAL</button></a>
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>TEXAS REGIONAL</button></a>
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>TRAINEE</button></a>
            </div>
						<div class="container--flex margin--lg container--column-sm positions__column">
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>SOUTHEAST REGIONAL</button></a>
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>DEDICATED</button></a>
							<a href="#" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow container--full-width"><button>LOCAL</button></a>
            </div>
	    </section>
			<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>
