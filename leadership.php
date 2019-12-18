<?php
/* Template Name: Leadership */

get_header();
?>

    <div class="page-header">
        <div class="section-content">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
    </div>


    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>

                    <?php endwhile; else : ?>
                    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                    <?php endif;?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase">Elders</h1>
                </div>
            </div>

            <div class="row margin-lg-top">
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/default-person-1.jpg" alt="Jeff Romans" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jeff<br/>Romans</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Senior Pastor</h6>

                                <p>Jeff Romans serves as our pastor-teacher. He loves helping people become faithful followers of Jesus. He is married to the best woman he has ever met, Christine. They have four awesome boys named Christopher, Shawn, Samuel, and Andrew. Before moving to Montana, Jeff ministered in Akron, Chicago, and Los Angeles. He has obtained degrees from the Moody Bible Institute (BA) and The Master’s Seminary (M.Div).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2019/03/Haluzska-Rick-1.jpg" alt="Rick Haluszka" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Rick<br/>Haluszka</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Associate Pastor</h6>

                                <p>Rick Haluszka serves as our Associate Pastor. Born and raised on the Hi-Line, Rick came on staff in 2013 at CCC as a Pastoral Intern after graduating with a B.S. in HHP from MSU–Bozeman. Having completed five years of training and discipleship under Pastor Jeff, including graduating from The Master's University with an M.A. in Biblical Studies, Rick was affirmed as an elder at CCC in January of 2018. His primary focus is on Pastoral Care, though he also leads our Music and Youth ministries. Rick is happily married to Julia and grateful to be Laura and Ian's dad. He enjoys reading, sports, conversation, and anything BBQ.</p>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Hartzler-John.jpg" alt="Jonathan Hartzler" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jonathan<br/>Hartzler</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Elder</h6>

                                <p>Jon grew up in Pennsylvania, but got to Montana as soon as he could. He holds a B.A. in History and a minor in Political Science from Penn State University and is currently working on a Certificate in Innovative Distribution through Purdue University. He works for MacArthur Co., a building materials distributor, where he is the branch manager. He is one of our Adult Sunday School teachers and loves discussing theology. He and his wife, Kristin, have three children, Mia, Gabe, and Nate. In his spare time, Jon loves strength training, fly-fishing, hunting, and just about any activity that gets him into the Montana outdoors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase">Elders-in-Training</h1>
                </div>
            </div>

            <div class="row margin-lg-top">
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Kelly-David.jpg" alt="David Kelly" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">David<br/>Kelly</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Director of Growth Groups</h6>

                                <p>David is currently an elder in training and oversees the Growth Group Ministries at Cornerstone. He is married to Amanda and they have two children; Calista and Jace. David enjoys the pursuit of growing relationships in the church and pointing people to the truth of God’s word.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Hilkemann-Dave.jpg" alt="David Hilkemann" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">David<br/>Hilkemann</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Directory of Ministries and Admimnistration</h6>

                                <p>Dave is the Director of Ministries and Administration at Cornerstone and an elder-in-training. He and his wife, Dawn teach the 3rd and 4th grade Sunday school class, and the 5th and 6th grade youth group on Wednesday nights. Dave and Dawn have three daughters, Anna, Sadie, and Callie, and one son, Silas. Dave enjoys riding his bike, drinking coffee, and woodworking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase">Diaconate</h1>
                </div>
            </div>

            <div class="row margin-lg-top">
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Burnham-Seth.jpg" alt="Seth Burnham" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Seth<br/>Burnham</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Seth Burnham was born and raised in Lewistown, MT and enjoys rifleman-ship, hunting and playing guitar. He is married to the beautiful and compassionate Endreah and together they have 3 children, Azalea, John and Ethan and have fostered 32 children at different times in their home. Seth currently serves on the music team as a bass player, and as a leader/teacher for the Cornerstone Youth Ministry.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Gardner-Jeremy.jpg" alt="Jeremy Gardner" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jeremy<br/>Gardner</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Jeremy Gardner started attending Cornerstone Community Church in December of 2012. He is married to his wife Lindsey and they have two children, Dallas and Savannah. Jeremy joined the Deacons Ministry in February of 2018 and is grateful for the opportunity to serve his church body and the Billings community. Jeremy is also an active member of the worship team and also serves in CCC’s children’s ministry.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Gardner-Lindsay.jpg" alt="Lindsey Gardner" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Lindsey<br/>Gardner</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Lindsey Gardner first began attending Cornerstone Community Church in 1991. She and her husband Jeremy have two children, Dallas and Savannah. Lindsey serves as Cornerstone’s Children’s Ministry Director. In addition to serving in our children’s ministries, Lindsey serves on the Deacon’s Administrative Committee as the treasurer of the Deacon fund.</p>
                            </div>
                        </div>
                    </div>
				</div>	
                
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Harpster-Susan.jpg" alt="Susan Harpster" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Susan<br/>Harpster</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Susan Harpster oversees the CCC prison ministry at Montana Women’s Prison. She organizes the assembling of hygiene kits for the homeless that go to Montana Rescue Mission and the Women’s & Children’s Shelter. She also coordinates meals for those in our body experiencing things like illness or the birth of a new baby. She is married to Rick and they have a daughter (Hannah) and a grand-daughter (Raziyah). </p>
                            </div>
                        </div>
                    </div>
				</div>
                
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Murray-Bill.jpg" alt="Bill Murray" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Bill<br/>Murray</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Sunny and I have been attending Cornerstone since the summer of 2015 and we have been truly blessed by both the shepherding and Christ-centered preaching. I currently serve on both the Deacon Administrative Committee and the Benevolence Committee. My interests include most things outdoor, including bicycling, skiing, fishing, and gardening, plus having our Golden pups take me for a walk.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Rivers-Patrick.jpg" alt="Patrick Rivers" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Patrick<br/>Rivers</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Patrick Rivers is honored to serve as a deacon at Cornerstone. He works as a CPA and enjoys spending time with his wife, Betsy, and their four young children.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Romans-Christine.jpg" alt="Christine Romans" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Christine<br/>Romans</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Christine Romans is an active women’s Growth Growth leader and discipler here at Cornerstone. Her husband, Jeff, and four boys keep her pretty busy at home as well. When not tied up at home or church, she can be found at Elder Grove School teaching middle school English.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Stafford-Paul.jpg" alt="Paul Stafford" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Paul<br/>Stafford</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Paul Stafford and his wife, Suzee, and their children, Ashlee and Mason moved to Billings from Wyoming in 2004. Ashlee and Mason now live in Denver and Bozeman with their spouses, Andy & Emma, and their first grandchild, Averee. They joined Cornerstone in 2014 because they loved the preaching and worship services but mostly because of the unique passion for honestly seeing who we are and how we are amazingly immersed in His grace. Paul’s role as deacon focuses on “going beyond the ordinary” in the benevolence ministry. He also like to put together classes on financial stewardship (which is also his day “job”), as well as seminars/classes on parenting, marriage and men’s classes. He also does a little to get us together on the softball field and out camping.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Stafford-Suzee.jpg" alt="Suzee Stafford" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Suzee<br/>Stafford</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deaconess</h6>

                                <p>Suzee is a certified counselor with CCEF and currently works part-time at CCEF-MT as a pastoral counselor. She’s currently completing a Masters degree in Biblical Counseling by finishing up the theology requirements. She is married to Paul and they have two married children. She likes to hike, ski, garden and read classical literature. As a deacon, she’d like to serve others through prayer and the ministry and counsel of God’s word.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Steinback-Jeff.jpg" alt="Jeff Steinback" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Jeff<br/>Steinback</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Jeff Steinback has been attending Cornerstone since 2010. Pastor Jeff married Jeff and his wife Lindsay in 2012. They have 2 kids, Annalyn and John. Jeff serves on the Deacon’s Administrative Committee as the Diaconate President. He also helps as one of the Children's Church teachers, and participates in the Men's growth group. His family enjoys swimming and eating outside on the deck in nice weather. He also likes fly fishing and snow skiing.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/default-person-1.jpg" alt="Gary Theissen" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Gary<br/>Theissen</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Gary Theissen is Cornerstone’s Treasurer. He and his wife, Linda have been married for 45 years. Gary and Linda have 4 children, soon to be 6 grandkids. He enjoys golf and fishing when he finds the time.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Worth-Bekah.jpg" alt="Bekah Worth" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Bekah<br/>Worth</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Bekah Worth serves as a deaconess at Cornerstone Community Church. She and her husband Steve moved here from PA in 2013 and have two young girls. She has a bachelor's degree in Christian Education from Lancaster Bible College. She loves the children and families at Cornerstone and is excited to watch them grow as they come to know and love Jesus!</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Worth-Steve.jpg" alt="Steve Worth" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Steve<br/>Worth</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Steve and his wife Bekah two precious daughters, Abby and Elizabeth. Scotsman Steve graduated from Westminster Seminary in 2011 with an MA in Biblical Counseling. Steve is passionate to serve the Lord and bless others. He loves Jesus, enjoys reading, drinking good coffee and hiking in his spare time.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-xl-5">
                                <img src="../../wp-content/uploads/2018/12/Yakel-Tom.jpg" alt="Tom Yakel" />
                            </div>

                            <div class="col-12 col-md-8 col-xl-7">
                                <h1 class="text-uppercase font-700 no-margin-bottom">Tom<br/>Yakel</h1>

                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Deacon</h6>

                                <p>Tom Yakel has been serving in the audio and video ministry of Cornerstone Community Church for the past five years. He also helps to keep our church clean and in good repair. He loves helping the church and coin collecting.</p>
                            </div>
                        </div>
                    </div>
				</div>
				
				
            </div>

        </div>
    </div>

    <?php get_footer(); ?>