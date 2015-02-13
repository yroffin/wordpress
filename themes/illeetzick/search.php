<!-- search -->
<?php
/**
 * Copyright 2015 Yannick Roffin.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *      http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * search
 *
 * @package WordPress
 * @subpackage simple
 * @since simple 1.0
 */
get_header(); ?>

<?php if (have_posts()) : ?>

    <h2>Search Results</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Date</th>
          <th>Author</th>
        </tr>
      </thead>
      <tbody>
<?php while (have_posts()) : the_post(); ?>
        <tr>
          <th scope="row">Id. <?php the_ID(); ?></th>
          <td><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></td>
          <td><?php the_time('F jS, Y') ?></td>
          <td><?php the_author() ?></td>
        </tr>
<?php endwhile; ?>
      </tbody>
    </table>
<?php else : ?>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <strong>Ooops</strong> no result
</div>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
