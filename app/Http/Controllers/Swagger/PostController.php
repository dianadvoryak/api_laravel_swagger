<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Create",
 *     tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string", example="Some title"),
 *                     @OA\Property(property="likes", type="integer", example=20),
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="title", type="string", example="Some title"),
 *             @OA\Property(property="likes", type="integer", example=20),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *      path="/api/posts",
 *      summary="List",
 *      tags={"Post"},
 *
 *      @OA\Response(
 *          response=200,
 *          description="ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=20),
 *              )),
 *          ),
 *      ),
 * ),
 *
 * @OA\Get(
 *       path="/api/posts/{post}",
 *       summary="One post",
 *       tags={"Post"},
 *
 *       @OA\Parameter(
 *           description="Post Id",
 *           in="path",
 *           name="post",
 *           required=true,
 *           example=1
 *       ),
 *
 *       @OA\Response(
 *           response=200,
 *           description="ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="id", type="integer", example=1),
 *               @OA\Property(property="title", type="string", example="Some title"),
 *               @OA\Property(property="likes", type="integer", example=20),
 *           ),
 *       ),
 *  ),
 *
 * @OA\Patch(
 *    path="/api/posts/{post}",
 *    summary="Update post",
 *    tags={"Post"},
 *
 *    @OA\Parameter(
 *        description="Post Id",
 *        in="path",
 *        name="post",
 *        required=true,
 *        example=1
 *    ),
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Some title for edite"),
 *                      @OA\Property(property="likes", type="integer", example=21),
 *                  )
 *              }
 *          )
 *      ),
 *
 *        @OA\Response(
 *            response=200,
 *            description="ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="likes", type="integer", example=20),
 *            ),
 *        ),
 *   ),
 *
 * @OA\Delete(
 *        path="/api/posts/{post}",
 *        summary="Delete post",
 *        tags={"Post"},
 *
 *        @OA\Parameter(
 *            description="Post Id",
 *            in="path",
 *            name="post",
 *            required=true,
 *            example=1
 *        ),
 *
 *        @OA\Response(
 *            response=200,
 *            description="ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="message", type="string", example="Deleted successfully"),
 *            ),
 *        ),
 *   ),
 */
class PostController extends Controller
{
}
