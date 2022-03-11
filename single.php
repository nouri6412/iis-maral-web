<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage iisgroup
 * @since iisgroup 1.0
 */

get_header();
?>
<!--  -->
<div class="pb-5 pt-5">
    <div class="">
        <div class="col-10 col-md-11 col-xl-9 m-auto">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8">
                    <?php

                    // Start the Loop.
                    while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/content/content', 'page');

                    endwhile; // End the loop.
                    ?>
                </div>

                <!--  -->
                <div class="col-12 col-lg-4 ps-lg-4 mt-5 mt-lg-0">
                    <div class="border-lg-start ps-lg-4">
                        <?php
                        get_template_part('template-parts/widget/widget', 'our-service');
                        ?>
                        <div class="bg-lighter border rounded">
                            <div class="p-4 pt-5 pb-5">
                                <div>
                                    <h4 class="font-bold">Latest News
                                    </h4>
                                    <div>
                                        <ul class="p-0 news mt-4">
                                            <li><a href="">Canada PNP Immigration Program Lottery Results for January 2022
                                                </a></li>
                                            <li><a href="">Holding the first Canadian Express Entry Lottery
                                                </a></li>
                                            <li><a href="">Holding the first Canadian Express Entry Lottery
                                                </a></li>
                                            <li><a href="">Holding the first Canadian Express Entry Lottery
                                                </a></li>
                                            <li><a href="">Holding the first Canadian Express Entry Lottery
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="text-end mt-4">
                                        <a href="" class="btn border">See all news
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="p-2 pt-3">
                            <div class="row link-btn">
                                <div class="col"><a href=""><svg width="1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z">
                                            </path>
                                        </svg><span>educational
                                        </span></a></div>
                                <div class="col"><a href=""><svg width="1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z">
                                            </path>
                                        </svg><span>Migration
                                        </span></a></div>
                            </div>
                            <div class="row link-btn">
                                <div class="col"><a href=""><svg width="1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                                            <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z">
                                            </path>
                                        </svg><span>investment
                                        </span></a></div>
                                <div class="col"><a href=""><svg width="1em" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z">
                                            </path>
                                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z">
                                            </path>
                                        </svg><span>Canadian visa
                                        </span></a></div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="mt-3 border rounded">
                            <div class="p-4 pb-5">
                                <div>
                                    <h4 class="font-bold">Cities in Canada
                                    </h4>
                                    <div>
                                        <ul class="p-0 news mt-4">
                                            <li><a href="">Vancouver
                                                </a></li>
                                            <li><a href="">Toronto
                                                </a></li>
                                            <li><a href="">Montreal
                                                </a></li>
                                            <li><a href="">Ottawa
                                                </a></li>
                                            <li><a href=""> Ottawa
                                                </a></li>
                                            <li><a href=""> Winnipeg
                                                </a></li>
                                            <li><a href=""> Victoria
                                                </a></li>
                                        </ul>
                                    </div>
                                    <div class="text-end mt-4">
                                        <a href="" class="btn border">See all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
