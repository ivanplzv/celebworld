<div id="cnw">
    <div
            id="branding"
            itemscope="itemscope"
            itemtype="http://schema.org/Organization"
    >

    </div>

    <div id="main">
        <div class="cnw_waist_band">
            <main
                    id="content"
                    class="cnw_profile no_dupe_post no_salary"
                    data-post-id="165"
                    itemscope="itemscope"
                    itemtype="http://schema.org/Person"
            >
                <div id="single__main">
                    <div id="single__header">
                        <h1 class="title"><?= $person->name?> Net Worth</h1>
                        <div class="meta">
                            <h2 class="inline_inherit">How much is <?= $person->name?> Worth?</h2>

                    </div>
                    </div>

                    <div id="single__container">
                        <div id="single__facts" class="aside">
                            <meta itemprop="jobTitle" content="Actor" /><meta
                                    itemprop="jobTitle"
                                    content="Film Producer"
                            /><meta itemprop="jobTitle" content="Record producer" /><meta
                                    itemprop="jobTitle"
                                    content="Television producer"
                            /><meta itemprop="jobTitle" content="Rapper" /><meta
                                    itemprop="jobTitle"
                                    content="Screenwriter"
                            />
                            <div
                                    itemprop="netWorth"
                                    itemscope="itemscope"
                                    itemtype="http://schema.org/PriceSpecification"
                            >
                                <meta itemprop="price" content="<?= $person->net_worth; ?>" /><meta
                                        itemprop="priceCurrency"
                                        content="<?= $person->currency; ?>"
                                />
                            </div>
                            <meta itemprop="gender" content="Male" />
                            <img
                                    alt="<?= $person->name; ?> Net Worth"
                                    class="image ggnoads lozad img_of_smith"
                                    src="/images/celebrity/<?= $person->image; ?>"
                                    data-src="<?= $person->image; ?>"
                                    data-loaded="true"
                                    width="300"
                                    height="300"
                            /><style>
                                .celeb_stats_table_header {
                                    padding: 5px 0;
                                }
                                .celeb_stats_table {
                                    border: 0;
                                    width: 100%;
                                    margin: 0 0 18px 0;
                                    background-color: #fff;
                                }
                                .celeb_stats_table tr td {
                                    border-bottom: 2px solid #dedede;
                                    padding: 9px;
                                    font-size: 16px;
                                }
                                .celeb_stats_table tr:last-child td {
                                    border-bottom: 0;
                                }
                                .celeb_stats_table tr td:first-child {
                                    font-weight: bold;
                                }
                                .celeb_stats_table tr:hover td {
                                    background-color: #fafafa;
                                }
                                .celeb_stats_table tr:nth-child(even) td {
                                    background-color: #fafafa;
                                }
                                .celeb_stats_table tr:nth-child(even):hover td {
                                    background-color: #f0f0f0;
                                }
                                .celeb_stats_table tr.row-fill td {
                                    border-bottom: 0;
                                    background-color: #BE5D77;
                                    font-size: 18px;
                                    font-weight: bold;
                                    color: #fff;
                                }
                            </style>
                            <h2 class="title celeb_stats_table_header"><?= $person->name; ?></h2>
                            <table class="celeb_stats_table">
                                <tbody>
                                <tr class="row-fill">
                                    <td>Net Worth:</td>
                                    <td><?= $person->net_worth_text; ?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth:</td>
                                    <td><?= $person->dob; ?></td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td><?= $person->gender; ?></td>
                                </tr>
                                <tr>
                                    <td>Height:</td>
                                    <td><?= $person->height; ?></td>
                                </tr>
                                <tr>
                                    <td>Profession:</td>
                                    <td>
                                        <?= $person->occupation; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nationality:</td>
                                    <td><?= $person->citizenship; ?></td>
                                </tr>
                                <tr>
                                    <td>Last Updated:</td>
                                    <td>2020</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="single__content" class="primary">
                            <div id="single__profile_stats">
                                <div id="single__profile_stat_table">
                                    <div class="meta_row networth">
                                        <div class="title"><?= $person->name; ?> Net Worth:</div>
                                        <div class="value"><?= $person->net_worth_text; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                    id="single__post_content"
                                    itemprop="description"
                                    class="post_the_content"
                            >
                                <?= strip_tags($person->description); ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="single__etc">
                    <div id="single__continue">
                        <div class="single_continue_rest">

                            <div class="networth_disclaimer">
                                All net worths are calculated using data drawn from public
                                sources. When provided, we also incorporate private tips and
                                feedback received from the celebrities or their
                                representatives. While we work diligently to ensure that our
                                numbers are as accurate as possible, unless otherwise
                                indicated they are only estimates. We welcome all
                                corrections and feedback using the button below.
                            </div>


                        </div>
                    </div>
                </div>
            </main>
            <aside id="sidebar">
                <!-- <div
                  class="block cnw_ads_300 sidebarAdvertContainerBox side_float_ad"
                >
                  <div id="dw_rightrail1">
                    <script type="text/javascript" class="optanon-category-C0004">
                      googletag.cmd.push(function () {
                        googletag.display("dw_rightrail1");
                      });
                    </script>
                    <div></div>
                  </div>
                </div> -->

            </aside>
        </div>
    </div>

</div>