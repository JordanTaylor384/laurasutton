const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
// const globImporter = require('node-sass-glob-importer');
const devMode = process.env.NODE_ENV !== "production";

module.exports = {
  context: path.join(__dirname,'/assets'),
  output: {
    path: path.join(__dirname,'/assets/dist'),
    filename: 'js/[name].bundle.js',
    pathinfo: false
  },
  mode: 'development',
  devtool: false,
  watch: true,
  watchOptions: {
    ignored: /node_modules/
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        include: [
          path.join(__dirname, '/assets/src/js')
        ],
        loader: 'babel-loader'
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              url: false,
              sourceMap: true,
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            }
          }
        ]
      },
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].bundle.css',
      // filename: 'css/[name].[contenthash].css',
      chunkFilename: '[id].css',
    })
  ],
  resolve: {
    symlinks: false,
    cacheWithContext: false,
  },
  resolve: {
    modules: ['node_modules'],
    alias: {
      'ScrollMagic': 'scrollmagic/scrollmagic/minified/ScrollMagic.min.js',
      'animation.gsap': 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js',
      'debug.addIndicators': 'scrollmagic/scrollmagic/umcompressed/plugins/debug.addIndicators.js'
    }
  }
}
