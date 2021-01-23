const path = require('path');

module.exports = {
  entry: './source/assets/scripts/index.js',
  output: {
    filename: 'index.js',
    path: path.resolve(__dirname, 'production'),
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ['style-loader', 'css-loader'],
      },
    ],
  },
};