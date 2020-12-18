<?php

namespace App\GraphQL\Mutations;

use App\Models\Article;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class ArticleMutator
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function create($rootValue, array $args, GraphQLContext $context)
    {
        $article = new Article($args);
        $context->user()->articles()->save($article);

        return $article;
    }
}
