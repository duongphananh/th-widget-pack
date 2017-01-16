<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Themo_Widget_Package extends Widget_Base {

	public function get_name() {
		return 'themo-package';
	}

	public function get_title() {
		return __( 'Package', 'elementor' );
	}

	public function get_icon() {
		return 'image-box';
	}

	public function get_categories() {
		return [ 'themo-elements' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_about',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);

		$this->add_control(
			'image',
			[
				'label' => __( 'Image', 'elementor' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter name here', 'elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'content',
			[
				'label' => __( 'Content', 'elementor' ),
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_price',
			[
				'label' => __( 'Price', 'elementor' ),
			]
		);

		$this->add_control(
			'price',
			[
				'label' => __( 'Price', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Free', 'elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'price_text',
			[
				'label' => __( 'Price Text', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( '/month', 'elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'price_background',
			[
				'label' => __( 'Price Background', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .th-pkg-info' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_link',
			[
				'label' => __( 'Link', 'elementor' ),
			]
		);

		$this->add_control(
			'url',
			[
				'label' => __( 'Link URL', 'elementor' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'http://your-link.com',
				'default' => [
					'url' => '',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_background',
			[
				'label' => __( 'Background', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'background_color',
			[
				'label' => __( 'Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .th-pkg-content' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_title',
			[
				'label' => __( 'Title', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Title Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} h3' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => __( 'Typography', 'elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} h3',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_content',
			[
				'label' => __( 'Content', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'content_color',
			[
				'label' => __( 'Content Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				],
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .th-package-content' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Typography', 'elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .th-package-content',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_price',
			[
				'label' => __( 'Price', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'price_color',
			[
				'label' => __( 'Price Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				],
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} h4' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'price_typography',
				'label' => __( 'Typography', 'elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} h4',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_price_text',
			[
				'label' => __( 'Price Text', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'price_text_color',
			[
				'label' => __( 'Price Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				],
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} span' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'price_text_typography',
				'label' => __( 'Typography', 'elementor' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} span',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings();

		if ( ! empty( $settings['url']['url'] ) ) {
			$this->add_render_attribute( 'link', 'href', $settings['url']['url'] );

			if ( ! empty( $settings['url']['is_external'] ) ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}
		}

		$this->add_render_attribute( 'front-icon-wrapper','class','icon-wrapper' );

		?>

		<article class="th-package">

			<?php if ( ! empty( $settings['url']['url'] ) ) : ?>
				<a class="th-pkg-click" <?php echo $this->get_render_attribute_string( 'link' ); ?>></a>
			<?php endif; ?>

			<div class="th-pkg-info">
				<?php if ( ! empty( $settings['price'] ) ) : ?>
					<h4><?php echo esc_html( $settings['price']) ?></h4>
				<?php endif;?>
				<?php if ( ! empty( $settings['price_text'] ) ) : ?>
					<span><?php echo esc_html( $settings['price_text']) ?></span>
				<?php endif;?>
			</div>

			<?php if ( $settings['image']['id'] ) : ?>
				<div class="th-pkg-img">
					<?php echo wp_get_attachment_image( $settings['image']['id'], 'full', false, '' ); ?>
				</div>
			<?php endif; ?>

			<div class="th-pkg-content">
				<?php if ( ! empty( $settings['title'] ) ) : ?>
					<h3><?php echo $settings['title']; ?></h3>
				<?php endif; ?>
				<?php if ( ! empty( $settings['content'] ) ) : ?>
					<div class="th-package-content">
						<?php echo $settings['content']; ?>
					</div>
				<?php endif; ?>
			</div>

		</article>

		<?php
	}

	protected function _content_template() {
		?>
		<article class="th-package">
			<# if ( settings.url && settings.url.url ) { #>
				<a class="th-pkg-click"  href="{{ settings.url.url }}"></a>
			<# } #>
			<div class="th-pkg-info">
				<# if ( '' !== settings.price ) { #>
					<h4>{{{ settings.price }}}</h4>
				<# } #>
				<# if ( '' !== settings.price_text ) { #>
					<span>{{{ settings.price_text }}}</span>
				<# } #>
			</div>
			<# if ( settings.image && '' !== settings.image.url ) { #>
				<div class="th-pkg-img">
					<img src="{{{ settings.image.url }}}" />
				</div>
			<# } #>
			<div class="th-pkg-content">
				<# if ( '' !== settings.title ) { #>
					<h3>{{{ settings.title }}}</h3>
				<# } #>
				<# if ( '' !== settings.content ) { #>
					<div class="th-package-content">
						{{{ settings.content }}}
					</div>
				<# } #>
			</div>
		</article>
		<?php
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Themo_Widget_Package() );