/**
 * @api {get} /api/index Request Data User
 * @apiName GetUser
 * @apiGroup User
 *
 * @apiParam {Number} id Users unique ID.
 *
 * @apiSuccess {String} no Number of the Data.
 * @apiSuccess {String} name Name of the User.
 * @apiSuccess {String} address  Address of the User.
 * @apiSuccess {String} phone  Phone of the User.
 */

 /**
  * @api {post} /api/index Insert Data User
  * @apiName PostUser
  * @apiGroup User
  *
  * @apiParam {Number} id Users unique ID.
  * @apiParam {String} name Users Required.
  * @apiParam {String} address Users required.
  * @apiParam {String} phone Users required.
  *
  * @apiSuccess {String} status Status 200.
  * @apiSuccess {String} error Error false.
  * @apiSuccess {String} message  Data person ditambahkan.
  *
  * @apiError {String} status Status 502.
  * @apiError {String} error Error true.
  * @apiError {String} message  Data person gagal ditambahkan.
  */
